<?php
    class Model_conference extends CI_Model
    {
        function getNumConference()
        {
            $sql = $this->db->query("select max(idconference)+1 as idconference from conference");
            return $sql->result();
        }

        function getConference()
        {
            $sql = $this->db->query("select idconference, titre, nbvotes from conference");
            return $sql->result();
        }

        function getNiveaux()
        {
            $sql = $this->db->query("select idniveau, niveau from niveau");
            return $sql->result();
        }

        function getThemes()
        {
            $sql = $this->db->query("select idtheme, libelletheme from theme");
            return $sql->result();
        }

        function getTechnos()
        {
            $sql = $this->db->query("select idtechno, nomtechno from technologie");
            return $sql->result();
        }

        function insertConference($id, $selec, $theme, $niveau, $titre, $contenu, $vote)
        {
            $sql = $this->db->query("insert into conference (idconference, selection, idtheme, idniveau, titre, contenu, nbvotes) values ('".$id."', '".$selec."', '".$theme."', '".$niveau."', '".$titre."', '".$contenu."', '".$vote."')");
        }

        function insertTechno($num, $tabTechno, $tabTechnoUtil)
        {
            $tabTechno = explode(",", $tabTechno);
            $tabTechnoUtil = explode(",", $tabTechnoUtil);
            for ($i=0; $i<count($tabTechno); $i++)
            {
                if ($tabTechnoUtil[$i] == "true")
                {
                    $sql = $this->db->query("insert into utiliser (idconference, idtechno) values ('".$num."', '".$tabTechno[$i]."')");
                }
            }
        }

        function addVote($tab1, $tab2)
        {
            $tab1 = explode(",", $tab1);
            $tab2 = explode(",", $tab2);
            for ($i=0; $i<count($tab1); $i++)
            {
                if ($tab2[$i] == "true")
                {
                    $sql = $this->db->query("update conference set nbvotes=nbvotes+1 where idconference=".$tab1[$i]."");
                }
            }
        }
    }
?>