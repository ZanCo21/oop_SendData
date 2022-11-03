<?php
   class biodata
   {

    public $nama,
            $kelas, 
            $jurusan,
            $sekolah;

    protected $email,
                $nohp,
                $jeniskelamin,
                $alamat;


    public function cetak_hasil(){
        
        $this->nama =$_POST ['nama'];
        $this->kelas =$_POST ['kelas'];
        $this->jurusan =$_POST ['jurusan'];
        $this->sekolah =$_POST ['sekolah'];
        return "<br> $this->nama, <br> $this->kelas, <br> $this->jurusan, <br> $this->sekolah";
    }

        protected function lihat_protec(){
        $this->email =$_POST ['email'];
        $this->nohp =$_POST ['nohp'];
        $this->jeniskelamin =$_POST ['jeniskelamin'];
        $this->alamat =$_POST ['alamat'];
        return "<br> $this->email,<br> $this->nohp,<br> $this->jeniskelamin,<br> $this->alamat";
    }

   }

   class data extends biodata{

        public function cetak_protec(){
        return parent::lihat_protec();
    }


   }
   

//    $biodata1 = new biodata();
//    $biodata1-> nama = "";
   
//    echo "user : $biodata1->nama";
//    echo $biodata1 -> cetak_hasil();

if(isset($_POST['simpan'])){
    if(empty($_POST['nama']) || empty($_POST['kelas'])){
        print "Lengkapi form";
    }else{
        $nama=$_POST['nama'];
        $kelas=$_POST['kelas'];
        $jurusan=$_POST['jurusan'];
        $sekolah=$_POST['sekolah'];
        $email=$_POST['email'];
        $nohp=$_POST['nohp'];
        $jeniskelamin=$_POST['jeniskelamin'];
        $alamat=$_POST['alamat'];
        $buka=fopen("index.php",'a');
        fwrite($buka,"nama : ${nama} <br> ");
        fwrite($buka,"kelas : ${kelas} <br> ");
        fwrite($buka,"jurusan : ${jurusan} <br> ");
        fwrite($buka,"sekolah : ${sekolah} <br> ");
        fwrite($buka," email : ${email} <br> ");
        fwrite($buka," nohp : ${nohp} <br> ");
        fwrite($buka," jeniskelamin : ${jeniskelamin} <br> ");
        fwrite($buka," alamat : ${alamat} <br> ");
        fwrite($buka,"<hr>");
        fclose($buka);
        print "data berhasil disimpan";
    }
}

   
?>