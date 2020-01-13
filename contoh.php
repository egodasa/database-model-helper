<?php
require_once "models.php";
class Contoh extends Models {
  function __construct()
  {
    parent::__construct();
    $this->tabel = "tbl_contoh";
    $this->primaryKey = "contoh_id";
    $this->kolomBawaanCrud = ["contoh_kolom_1", "contoh_kolom_2", "contoh_kolom_3"];
    $this->view = "data_contoh"; // pengganti relasi, query join dibuatkan jadi view
  }
}
