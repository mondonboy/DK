<?php
class KULDAP{
public  $ldap_error = array("ERR-000: OK", "ERR-001: Bind error", "ERR-002: Anonymous search failed",
    "ERR-003: User unknown",
    "ERR-004: More than one such user",
    "ERR-005: bind failed. user not authenticated.");

    public $ldap_uid			 = "";
    public $ldap_first_name_eng = "";
    public $ldap_last_name_eng  = "";
    public $ldap_first_name	 = "";
    public $ldap_last_name		 = "";
    public $ldap_email			 = "";
    public $ldap_gender		 = "";
    public $ldap_Job			 = "";
    public $ldap_department	 = "";
    public $ldap_faculty		 = "";
    public $ldap_major_id		 = "";
    public $ldap_campus		 = "";		//รหัสวิทยาเขต ดังนี้ บางเขน=B , กำแพงแสน=K , ศรีราชา=S , สกลนคร=C
    public $ldap_idcode		 = "";		//รหัสประจำตัวนิสิต

    public static function user_authen($username, $ldappass, $filter1 = "")
    {
        $host1   = "ldap.ku.ac.th";
        $host2   = "ldap2.ku.ac.th";
        $host3   = "ldap3.ku.ac.th";
        $base_dn = "dc=ku,dc=ac,dc=th";

        $ldapserver = ldap_connect($host1);
        if (!$ldapserver) {
            $ldapserver = ldap_connect($host2);
            if (!$ldapserver) {
                $ldapserver = ldap_connect($host3);
            }
        }

        $bind = ldap_bind($ldapserver);
        if (!$bind) {
            return (1);
        }

        $filter = "uid=" . $filter1;
        //$filter = "(&(department-id=K0816)(campus=K))"; //ค้นหาตามid ภาควิชา
        $result = ldap_search($ldapserver, $base_dn, $filter);
        $info = ldap_get_entries($ldapserver, $result);

        $user_dn = $info[0]["dn"];
        $bind = @ldap_bind($ldapserver, $user_dn, $ldappass);
        if (!$bind) {
            return null;
        } else {
            return $info;
        }
    }
}
?>