
<?php require_once "C:/xampp/htdocs/ltweb/system/config/config.php"; ?>
<?php

    class Database
    {
        /**
         * Khai báo biến kết nối
         * @var [type]
         */
        public $conn;

        public function __construct()
        {
            $this->conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            mysqli_query($this->conn,"SET NAMES 'utf8'");
        }



        /**
         * [insert description] hàm insert
         * @param  $table
         * @param  array  $data
         * @return integer
         */
        public function insert($table, array $data)
        {
            //code
            $sql = "INSERT INTO {$table} ";
            $columns = implode(',', array_keys($data));
            $values  = "";
            $sql .= '(' . $columns . ')';
            foreach($data as $field => $value) {
                if(is_string($value)) {
                    $values .= "'". mysqli_real_escape_string($this->conn,$value) ."',";
                } else {
                    $values .= mysqli_real_escape_string($this->conn,$value) . ',';
                }
            }
            $values = substr($values, 0, -1);
            $sql .= " VALUES (" . $values . ')';
            // _debug($sql);die;
            mysqli_query($this->conn, $sql) or die("Lỗi  query  insert ----" .mysqli_error($this->conn));
            return mysqli_insert_id($this->conn);
        }

        public function update($table, array $data, array $conditions)
        {
            $sql = "UPDATE {$table}";

            $set = " SET ";

            $where = " WHERE ";

            foreach($data as $field => $value) {
                if(is_string($value)) {
                    $set .= $field .'='.'\''. mysqli_real_escape_string($this->conn, xss_clean($value)) .'\',';
                } else {
                    $set .= $field .'='. mysqli_real_escape_string($this->conn, xss_clean($value)) . ',';
                }
            }

            $set = substr($set, 0, -1);


            foreach($conditions as $field => $value) {
                if(is_string($value)) {
                    $where .= $field .'='.'\''. mysqli_real_escape_string($this->conn, xss_clean($value)) .'\' AND ';
                } else {
                    $where .= $field .'='. mysqli_real_escape_string($this->conn, xss_clean($value)) . ' AND ';
                }
            }

            $where = substr($where, 0, -5);

            $sql .= $set . $where;
            // _debug($sql);die;

            mysqli_query($this->conn, $sql) or die( "Lỗi truy vấn Update -- " .mysqli_error());

            return mysqli_affected_rows($this->conn);
        }
        public function updateview($sql)
        {
            $result = mysqli_query($this->conn,$sql)  or die ("Lỗi update view " .mysqli_error($this->conn));
            return mysqli_affected_rows($this->conn);

        }
        public function countTable($table)
        {
            $sql = "SELECT id FROM  {$table}";
            $result = mysqli_query($this->conn, $sql) or die("Lỗi Truy Vấn countTable----" .mysqli_error($this->conn));
            $num = mysqli_num_rows($result);
            return $num;
        }


        /**
         * [delete description] hàm delete
         * @param  $table      [description]
         * @param  array  $conditions [description]
         * @return integer             [description]
         */
        public function delete ($table ,  $id )
        {
            $sql = "DELETE FROM {$table} WHERE id = $id ";

            mysqli_query($this->conn,$sql) or die (" Lỗi Truy Vấn delete   --- " .mysqli_error($this->conn));
            return mysqli_affected_rows($this->conn);
        }

        /**
         * delete array
         */

        public function deletewhere($table,$data = array())
        {
            foreach ($data as $id)
            {
                $id = intval($id);
                $sql = "DELETE FROM {$table} WHERE id = $id ";
                mysqli_query($this->conn,$sql) or die (" Lỗi Truy Vấn delete   --- " .mysqli_error($this->conn));
            }
            return true;
        }

        public function fetchsql( $sql )
        {
            $result = mysqli_query($this->conn,$sql) or die("Lỗi  truy vấn sql " .mysqli_error($this->conn));
            $data = [];
            if( $result)
            {
                while ($num = mysqli_fetch_assoc($result))
                {
                    $data[] = $num;
                }
            }
            return $data;
        }

        public function fetchID($table , $id )
        {
            $sql = "SELECT * FROM {$table} WHERE id = $id ";
            $result = mysqli_query($this->conn,$sql); //or die("Lỗi  truy vấn fetchID " .mysqli_error($this->conn));
            return mysqli_fetch_assoc($result);
        }

        public function fetchOne($table , $query)
        {
            $sql  = "SELECT * FROM {$table} WHERE ";
            $sql .= $query;
            $sql .= "LIMIT 1";
            $result = mysqli_query($this->conn,$sql) or die("Lỗi  truy vấn fetchOne " .mysqli_error($this->conn));
            return mysqli_fetch_assoc($result);
        }

        public function deletesql ($table ,  $sql )
        {
            $sql = "DELETE FROM {$table} WHERE " .$sql;
            // _debug($sql);die;
            mysqli_query($this->conn,$sql) or die (" Lỗi Truy Vấn delete   --- " .mysqli_error($this->conn));
            return mysqli_affected_rows($this->conn);
        }



        public function fetchAll($table)
        {
            $sql = "SELECT * FROM {$table} WHERE 1" ;
            $result = mysqli_query($this->conn,$sql) or die("Lỗi Truy Vấn fetchAll " .mysqli_error($this->conn));
            $data = [];
            if( $result)
            {
                while ($num = mysqli_fetch_assoc($result))
                {
                    $data[] = $num;
                }
            }
            return $data;
        }

        public function searchAll($table,$valuefrom,$valueto)
        {
            $sql = "SELECT * FROM {$table} WHERE price BETWEEN $valuefrom AND $valueto" ;
            $result = mysqli_query($this->conn,$sql) or die("Lỗi Truy Vấn fetchAll " .mysqli_error($this->conn));
            $data = [];
            if( $result)
            {
                while ($num = mysqli_fetch_assoc($result))
                {
                    $data[] = $num;
                }
            }
            return $data;
        }

        public function searchAllCondition($table,$idCate,$idBrand)
        {
            $sql = "SELECT * FROM {$table} WHERE cate_id = $idCate AND brand_id = $idBrand" ;
            $result = mysqli_query($this->conn,$sql) or die("Lỗi Truy Vấn fetchAll " .mysqli_error($this->conn));
            $data = [];
            if( $result)
            {
                while ($num = mysqli_fetch_assoc($result))
                {
                    $data[] = $num;
                }
            }
            return $data;
        }

        public function searchID($table , $id )
        {
            $sql = "SELECT * FROM {$table} WHERE id = $id ";
            $result = mysqli_query($this->conn,$sql); //or die("Lỗi  truy vấn fetchID " .mysqli_error($this->conn));
            return $result;
        }

        public function searchallPro($table,$key_search)
        {
          $sql = "SELECT * FROM {$table} WHERE name Like '%$key_search%' " ;
          $result = mysqli_query($this->conn,$sql) or die("Lỗi Truy Vấn fetchAll " .mysqli_error($this->conn));
          $data = [];
          if( $result)
          {
              while ($num = mysqli_fetch_assoc($result))
              {
                  $data[] = $num;
              }
          }
          return $data;
        }

        // public function searchID($table,$id)
        // {
        //     $sql = "SELECT * FROM {$table} WHERE id=$id ";
        //     $result = mysqli_query($this->conn,$sql) or die("Lỗi Truy Vấn fetchAll " .mysqli_error($this->conn));
        //     $data = [];
        //     if( $result)
        //     {
        //         while ($num = mysqli_fetch_assoc($result))
        //         {
        //             $data[] = $num;
        //         }
        //     }
        //     return $data;
        // }

        public  function fetchJones($table,$sql,$total = 1,$page,$row ,$pagi = true )
        {

            $data = [];

            if ($pagi == true )
            {
                $sotrang = ceil($total / $row);
                $start = ($page - 1 ) * $row ;
                $sql .= " LIMIT $start,$row ";
                $data = [ "page" => $sotrang];


                $result = mysqli_query($this->conn,$sql) or die("Lỗi truy vấn fetchJone ---- " .mysqli_error($this->conn));
            }
            else
            {
                $result = mysqli_query($this->conn,$sql) or die("Lỗi truy vấn fetchJone ---- " .mysqli_error($this->conn));
            }

            if( $result)
            {
                while ($num = mysqli_fetch_assoc($result))
                {
                    $data[] = $num;
                }
            }

            return $data;
        }
        public  function fetchJone($table,$sql ,$page = 0,$row ,$pagi = false )
        {

            $data = [];
            // _debug($sql);die;
            if ($pagi == true )
            {
                $total = $this->countTable($table);
                $sotrang = ceil($total / $row);
                $start = ($page - 1 ) * $row ;
                $sql .= " LIMIT $start,$row";
                $data = [ "page" => $sotrang];

                $result = mysqli_query($this->conn,$sql) or die("Lỗi truy vấn fetchJone ---- " .mysqli_error($this->conn));
            }
            else
            {
                $result = mysqli_query($this->conn,$sql) or die("Lỗi truy vấn fetchJone ---- " .mysqli_error($this->conn));
            }

            if( $result)
            {
                while ($num = mysqli_fetch_assoc($result))
                {
                    $data[] = $num;
                }
            }
            // _debug($data);
            return $data;
        }


        public  function fetchJoneDetail($table , $sql ,$page = 0,$total ,$pagi )
        {
            $result = mysqli_query($this->conn,$sql) or die("Lỗi truy vấn fetchJone ---- " .mysqli_error($this->conn));

            $sotrang = ceil($total / $pagi);
            $start = ($page - 1 ) * $pagi ;
            $sql .= " LIMIT $start,$pagi";

            $result = mysqli_query($this->conn , $sql);
            $data = [];
            $data = [ "page" => $sotrang];
            if( $result)
            {
                while ($num = mysqli_fetch_assoc($result))
                {
                    $data[] = $num;
                }
            }
            return $data;
        }

        public function total($sql)
        {
            $result = mysqli_query($this->conn  , $sql);
            $tien = mysqli_fetch_assoc($result);
            return $tien;
        }
    }

    ?>
