<?php
require('../app/libs/DataBaseConn.php');

use PHPUnit\Framework\TestCase;


class DataBaseConnTest extends TestCase {

    public function setUp() : void {
        $this->instance = new DatabaseConn();
    }
    public function tearDown() : void {
        unset($this->instance);
    }

    public function Dbtest() {
        $this->assertEquals(true, $this->instance->put("cmsWebsiteAuth",'session_id, usrId, addrIp, fingerprint, dateTime, content, email, authCode','1234567890,$id,$addrIp,hash_hmac(sha512+USER_AGENT+hash()+TRUE),$dt,0,$eml,$code'));
        $this->assertEquals(true, $this->instance->get('cmsWebsiteAuth','session_id','id=1'));
    }


}

?>