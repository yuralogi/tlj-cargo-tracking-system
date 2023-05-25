<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  // $noId = 2;
  // $formating =  date('dmYHis');

  // $result = $formating . $noId;

  // $intResult = (int)$result;

  // // // var_dump(time() + $noId);
  // // // var_dump(time() + $noId);
  // var_dump($result);
  // var_dump($intResult);

  // echo $result;

  $row = $this->db->select("*")->limit(1)->order_by('id_barang', "DESC")->get("tbl_barang")->row();
  $formatingDate =  date('YmdHis');

  $resultResi =  $formatingDate . $row->id_barang;

  var_dump($resultResi);
  ?>













</body>

</html>