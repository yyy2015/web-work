<html>
    <head>
        <title>databaseTest</title>
    </head>
    <body>
        <?php
            $this->load->database();
            $query = $this->db->query('SELECT id,username FROM user');
            foreach ($query->result() as $row){
                echo $row->id;
                echo $row->username;
            }
            echo 'Total Results: '.$query->num_rows();
        ?>
    </body>
</html>