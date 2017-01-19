<?php

namespace Ss\Etc;

class ChgCodeInfo extends Db
{

    private $table = "ss_chg_code";

    function IsCodeOK()
    {
        if ($this->db->has($this->table, [
            "code" => $this->id
        ])
        ) {
            return true;
        } else {
            return false;
        }
    }

    function GetMoney()
    {
        return $this->GetCodeArray()['money'];
    }

    function GetCodeArray()
    {
        $datas = $this->db->select($this->table, "*", [
            "code" => $this->id
        ]);
        return $datas['0'];
    }

    function Del()
    {
        $this->db->delete($this->table, [
            "code" => $this->id
        ]);
    }
}