<?php 
// Fonctions par défaut des models


class Model 
{
    public function fields($table) {
        //  Here you are getting columns information
        $result = mysql_query("SHOW COLUMNS FROM users");

        if (!$result) {
            echo 'Could not run query: ' . mysql_error();
            exit;
        }

        //  Scan through all the columns
        while ($field = mysql_fetch_object($result)) {

            //  structure of $field looks like this
            /*
            object(stdClass)[1]
            public 'Field' => string 'id' (length=2)
            public 'Type' => string 'int(11)' (length=7)
            public 'Null' => string 'NO' (length=2)
            public 'Key' => string 'PRI' (length=3)
            public 'Default' => null
            public 'Extra' => string 'auto_increment' (length=14)
            */

            //
            echo "$field->Field: <input type=\"text\" name=\"$field->Field\" size=\"40\" maxlength=\"256\" /><br>";
        }
    }

	public function save() {
		$data = [
            "firstname"  => $this->firstname(),
            "surname"   => $this->surname()
        ];
        if ($this->id > 0) return $this->update();
        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);
        $this->setId($nouvelId);
        return $this;
	}

	public function update() {
        if ($this->id > 0) {
            $data = [
                "firstname"  => $this->firstname(),
                "surname"   => $this->surname()
            ];
            Db::dbUpdate(self::TABLE_NAME, $data);
            return $this;
        }
        return;
    }

	public function delete() {
        $data = [
            'id' => $this->id(),
        ];

        Db::dbDelete(self::TABLE_NAME, $data);
        return;
    }

	public function findAll() {
        $data = Db::dbFind(self::TABLE_NAME);
        return $data;
    }

	public function findOne() {
        $request = [
            ['id', '=', $id]
        ];
        $element = Db::dbFind(self::TABLE_NAME, $request);
        if (count($element) > 0) $element = $element[0];
        else return;

        return $element;
    }

	public function find($id) {
        $data = Db::dbFind(self::TABLE_NAME, $request);
        return $data;
    }
}