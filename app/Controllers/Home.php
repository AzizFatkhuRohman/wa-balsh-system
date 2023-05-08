<?php

namespace App\Controllers;
use App\Models\KontakModel;
use App\Models\PesanModel;
use CodeIgniter\Session\Session;
use PhpOffice\PhpSpreadsheet\IOFactory;
class Home extends BaseController
{
    protected $session;
    public function __construct(){
        $this->session = service('session');
    }
    //Dashboard Admin
    public function dashboard(){
        $KontakModel = new KontakModel;
        $data = $KontakModel->countAllResults();
        $PesanModel = new PesanModel;
        $status ='Delivered';
        $pesan = $PesanModel->where('status', $status)->countAllResults();
        $title = 'Dashboard';
        return view ('dashboard', compact('data', 'pesan','title'));
    }
    // Kontak Admin GET
    public function kontak(){
        $title = 'Kontak';
        $kontakModel = new KontakModel;
        $data = $kontakModel->orderBy('id', 'desc')->findAll();
        return view('kontak', compact('title', 'data'));
    }
    public function after_tambah_kontak(){
        $rules = config('Validation')->registrationRules ?? [
            'nama' => 'required',
            'nomor_whatsapp'    => 'required|integer',
        ];
        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $kontakModel = new KontakModel;
        $data = [
            'nama'=> $this->request->getPost('nama'),
            'nomor_whatsapp' => $this->request->getPost('nomor_whatsapp')
        ];
        $kontakModel->save($data);
        return redirect()->to('/kontak');
    }
    public function import_kontak(){
        $kontakModel = new KontakModel;
        $file = $this->request->getFile('file');
        $extension = $file->getClientExtension();
        echo $extension;
        if($extension== 'xlsx' || $extension== 'xls')
        {
            if($extension=='xls')
            {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
            }
            else{
                
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }
            $spreadsheet = $reader->load($file);
            $kontak = $spreadsheet->getActiveSheet()->toArray();
            foreach ($kontak as $key => $value) {
                if($key==0)
                {
                    continue;
                }
                $data = [
                    'id' => $value[0],
                    'nama' => $value[1],
                    'nomor_whatsapp' => $value[2]
                ];
                $kontakModel->insert($data);
            }
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }
    // edit_kontak GET
    public function edit_kontak($id){
        $title = 'Edit Kontak';
        $kontakModel = new KontakModel;
        $data = $kontakModel->find($id);
        return view('edit_kontak', compact('title', 'data'));
    }
    //Edit Kontak POST
    public function after_edit($id){
        $kontakModel = new KontakModel;
        $data = [
            'nama'=> $this->request->getPost('nama'),
            'nomor_whatsapp' => $this->request->getPost('nomor_whatsapp')
        ];
        $kontakModel->update($id, $data);
        return redirect()->to('/kontak')->with('success', 'Kontak berhasil diperbarui!');;
    }
    //Delete Kontak
    public function delete_kontak($id)
    {
        $model = new KontakModel;
        $model->delete(['id'=>$id]);
        return redirect()->to('/kontak');       
    }
    // Kirim Pesan GET
    public function kirim_pesan(){
        $title = 'Kirim Pesan';
        $PesanModel = new PesanModel;
        $data = $PesanModel->orderBy('id', 'desc')->findAll();
        return view ('kirim_pesan', compact('title', 'data'));
    }
    //Kirim Pesan POST
    public function after_kirim_pesan(){
        // $rules = config('Validation')->registrationRules ?? [
        //     'nomor_whatsapp'    => 'required',
        //     'deskripsi' => 'required'
        // ];
        // if (! $this->validate($rules)) {
        //     return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        // }
        $curl = curl_init();
        $token = "QLRR9nnh1XMX9WNYkkyOmJFxKc0hPbUoZp1ji1L1h1rxPWxM5ZMRm5UuSYucys4n";
        $random = true;
        $payload = [
            "data" => [
                [
                    'phone' => $this->request->getPost('nomor_whatsapp'),
                    'message' => $this->request->getPost('deskripsi'),
                ]
            ]
        ];
        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array(
                "Authorization: $token",
                "Content-Type: application/json"
            )
        );
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload) );
        curl_setopt($curl, CURLOPT_URL,  "https://eu.wablas.com/api/v2/send-message");
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

        $result = curl_exec($curl);
        curl_close($curl);
        echo "<pre>";
        print_r($result);
        // $PesanModel = new PesanModel;
        // $PesanModel->insert([
        //     'judul' => $this->request->getPost('judul'),
        //     'device' => $this->request->getPost('device'),
        //     'kategori' => $this->request->getPost('kategori'),
        //     'nomor_whatsapp' => $this->request->getPost('nomor_whatsapp'),
        //     'image' => $this->request->getPost('image'),
        //     'deskripsi' => $this->request->getPost('deskripsi')
        // ]);
        return redirect()->to('/kirim_pesan');
    }
}
