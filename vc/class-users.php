<?php
class Users
{
    public $db;
    public $id = 0;
    public $first;
    public $last;
    public $email;
    public $display;
    public $dob;
    public $country;
    public $gender;
    public $address;
    public $city;
    public $postcode;
    public $phone;
    public $how;
    public $created;
    public $status;
    public $agent_id;
    public $acceptance;
    public function __construct()
    {
        global $dbh;
        $this->db = $dbh;
        if (isset($_COOKIE['user_id'])) {
            $q   = $this->db->query("SELECT * FROM member WHERE id = '" . $_COOKIE['user_id'] . "'");
            $row = $q->fetch_array(MYSQLI_ASSOC);
            if (isset($row['id'])) {
                $this->id         = $row['id'];
                $this->first      = $row['first'];
                $this->last       = $row['last'];
                $this->email      = $row['email'];
                $this->password   = $row['password'];
                $this->display    = $row['display'];
                $this->dob        = $row['dob'];
                $this->country    = $row['country'];
                $this->gender     = $row['gender'];
                $this->address    = $row['address'];
                $this->city       = $row['city'];
                $this->postcode   = $row['postcode'];
                $this->phone      = $row['phone'];
                $this->how        = $row['how'];
                $this->created    = $row['created'];
                $this->status     = $row['status'];
                $this->agent_id   = $row['agent_id'];
                $this->acceptance = $row['acceptance'];
            } else {
                //$this->logout();
                header("location:" . BASE_URL . DEMO_URL . "login.html");
            }
        }
        $this->checkingpage();
    }
    public function get_email(){
        return $this->email;
    }
    public function login($email, $password)
    {
        $q   = $this->db->query("SELECT id FROM member WHERE lower(email) = '" . strtolower($email) . "' AND password = '" . $password . "'");
        $row = $q->fetch_array(MYSQLI_ASSOC);
        if (isset($row['id'])) {
            setcookie("user_id", "", time() - 31500000, '/', $_SERVER['SERVER_NAME']);
            setcookie("user_id", $row['id'], time() + 3600 * 24, '/', $_SERVER['SERVER_NAME'], false);
            return true;
        } else {
            return false;
        }
    }
    public function logout()
    {
        setcookie("user_id", "", time() - 31500000, '/', $_SERVER['SERVER_NAME']);
        unset($_COOKIE['user_id']);
    }

    public function checkFirstLoginStatus()
    {
        $sql    = "SELECT acceptance FROM member WHERE email = " . "'" . $this->email . "'";
        $q      = $this->db->query($sql);
        $row    = mysqli_fetch_assoc($q);
        $result = $row['acceptance'];
        return $result;
    }
    public function get_current_goal()
    {
        $sql    = "SELECT * FROM goals WHERE lower(userid) = '" . strtolower($this->email) . "'";
        $q      = $this->db->query($sql);
        // $row = mysqli_fetch_assoc($q);
        $result = array();
        $index  = 0;
        if (mysqli_num_rows($q) > 0) {
            $i = 0;
            while ($row = mysqli_fetch_assoc($q)) {
                $result[$i] = $row;
                $i++;
            }
        }
        $temp = array();
        return $result;
	}
	
	public function select_goal($id) {
        return "test";
        exit(0);
		$sql    = "SELECT * FROM goal WHERE id = '$id'";
        $q      = $this->db->query($sql);
		$result = array();
		$row = mysqli_fetch_assoc($q);
		$result['title'] = $row['title'];
		$result['amount'] = $row['amount'];
        return $result;
	}

	public function update_goal_info ( $id, $title, $amount) {
		$sql = "UPDATE goals SET title='$title', amount='$amount' WHERE id = '$id' ";
		$q   = $this->db->query($sql);
		if ($q === TRUE) {
			return "Record updated successfully";
		} else {
			return "Error updating record: ";
		}
	}

    public function insert_new_goal($title, $amount)
    {
        $sql = "INSERT INTO goals (userid, title, amount) VALUES ('$this->email','$title', '$amount')";
        $q   = $this->db->query($sql);
        if ($q === TRUE) {
            return "New record created successfully";
        } else {
            return "Error: " . $sql . "<br>" . $this->db->error;
        }
    }
    public function get_total_earning_record()
    {
        $sql   = "SELECT COUNT(*) AS CNT FROM earning WHERE performer_id = " . $this->id;
        $q     = $this->db->query($sql);
        $row   = $q->fetch_array(MYSQLI_ASSOC);
        $total = $row['CNT'];
        return $total;
    }
    public function get_earnings($limit, $offset)
    {
        $sql = "SELECT * FROM earning WHERE performer_id = " . $this->id;
        $sql .= " ORDER BY created DESC LIMIT " . $limit . " , " . $offset;
        $q    = $this->db->query($sql);
        $res  = $q->fetch_all(MYSQLI_ASSOC);
        $data = array();
        if (!empty($res)) {
            foreach ($res as $det) {
                $performer_amount = $det['performer_amount'];
                $data[]           = array(
                    date('d-M-Y', strtotime($det['created'])),
                    $performer_amount,
                    '<a href="" data-id="' . $det['id'] . '" class="btn btn-pinc payslip-action">INVOICE</a>'
                );
            }
        }
        return $data;
    }
    public function has_bank_details()
    {
        $q2  = $this->db->query("SELECT COUNT(*) AS CNT FROM performer_bank_details WHERE performer_id = " . $this->id);
        $row = $q2->fetch_array(MYSQLI_ASSOC);
        if ($row['CNT'] > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function user_bank_details($key = '')
    {
        $sql            = "SELECT * FROM performer_bank_details WHERE performer_id = " . $this->id;
        $q              = $this->db->query($sql);
        $row            = $q->fetch_array(MYSQLI_ASSOC);
        $bank_name      = '';
        $account_number = '';
        $short_code     = '';
        if (!empty($row)) {
            $bank_name      = $row['bank_name'];
            $account_number = $row['account_number'];
            $short_code     = $row['short_code'];
        }
        $arr = array(
            'bank_name' => $bank_name,
            'account_number' => $account_number,
            'short_code' => $short_code
        );
        var_dump ($arr);
        exit(0);
        return 0;
        // if (!empty($key)) {
        //     return $arr[$key];
        // }
        // return $arr;
    }
    //Paypal details
    public function user_paypal_details($key = '')
    {
        $sql               = "SELECT * FROM performer_paypal_details WHERE performer_id = " . $this->id;
        $q                 = $this->db->query($sql);
        $row               = $q->fetch_array(MYSQLI_ASSOC);
        $user_paypal_email = '';
        $account_number    = '';
        $short_code        = '';
        if (!empty($row)) {
            $user_paypal_email = $row['paypal_email_address'];
        }
        $arr = array(
            'paypal_email_address' => $user_paypal_email
        );
        if (!empty($key)) {
            return $arr[$key];
        }
        return $arr;
    }
    public function total_earning()
    {
        $q2  = $this->db->query("SELECT SUM(performer_amount) AS amount FROM earning WHERE performer_id = " . $this->id);
        $row = $q2->fetch_array(MYSQLI_ASSOC);
        return (float) $row['amount'];
    }
    public function is_logged_in()
    {
        if ($this->id != 0) {
            return true;
        }
        return false;
    }
    public function current_user_id()
    {
        return $this->id;
    }
    public function get_value($key)
    {
        return $this->$key;
    }
    public function get_twitter_account()
    {
        $q2  = $this->db->query("SELECT * FROM member_twitter WHERE member_id = " . $this->id);
        $row = $q2->fetch_array(MYSQLI_ASSOC);
        return $row;
    }
    public function has_twitter_account()
    {
        $q2  = $this->db->query("SELECT COUNT(*) AS CNT FROM member_twitter WHERE member_id = " . $this->id);
        $row = $q2->fetch_array(MYSQLI_ASSOC);
        if ($row['CNT'] > 0) {
            return true;
        } else {
            return false;
        }
    }
    //condition login apply and apply pahe
    function checkingpage()
    {
        $page = basename(str_replace('.php', '', $_SERVER['PHP_SELF']));
        if ($page == 'apply' || $page == 'login' || $page == 'forgetpassword') {
            if ($this->is_logged_in()) {
                header("location:" . BASE_URL . DEMO_URL . "account.html");
            }
        } elseif ($page == 'account') {
            if (!$this->is_logged_in()) {
                header("location:" . BASE_URL . DEMO_URL . "login.html");
            }
        }
    }

    //ccb
    public function get_quote(){
        $sql    = "SELECT * FROM quote";
        $q      = $this->db->query($sql);
        $row    = mysqli_fetch_assoc($q);
        $result["admin_name"] = $row['admin_name'];
        $result["comment"] = $row['comment'];
        return $result;
    }
    public function get_notice(){
        $sql    = "SELECT * FROM notice";
        $q      = $this->db->query($sql);
        $result = array();
        if (mysqli_num_rows($q) > 0) {
            $i = 0;
            while ($row = mysqli_fetch_assoc($q)) {
                $result[$i] = $row;
                $i++;
            }
        }
        return $result;
    }
    public function get_earning_info(){
        $sql    = "SELECT earning.total_amount, DATE(earning.created) AS date FROM earning WHERE DATE(earning.created) > SYSDATE() - 7 ";
        $q      = $this->db->query($sql);
        $result = array();
        if (mysqli_num_rows($q) > 0) {
            $i = 0;
            while ($row = mysqli_fetch_assoc($q)) {
                $result[$i] = $row;
                $i++;
            }
        }
        return $result;
    }
public function update_profile ($address) {
        $sql = "UPDATE `eyekandiesnew`.`member` SET `address` = '".$address."' WHERE `id` = ".$this->id;
        $q   = $this->db->query($sql);
        if ($q === TRUE) {
            return "Profile update successfully.";
        } else {
            return "Error updating Profile.";
        }
    }
    public function delete_profile () {

        $sql0 = "DELETE FROM `eyekandiesnew`.`member` WHERE `id` = ".$this->id;
        $sql1 = "DELETE FROM `eyekandiesnew`.`member_twitter` WHERE `id` = ".$this->id;
        $sql2 = "DELETE FROM `eyekandiesnew`.`earning` WHERE `id` = ".$this->id;
        $sql3 = "DELETE FROM `eyekandiesnew`.`notifications` WHERE `id` ".$this->id;
        $sql4 = "DELETE FROM `eyekandiesnew`.`performer_bank_details` WHERE `id` = ".$this->id;
        $sql5 = "DELETE FROM `eyekandiesnew`.`performer_paypal_details` WHERE `id` = ".$this->id;

        $q   = $this->db->query($sql0);
        $q1 = $this->db->query($sql1);
        $q2   = $this->db->query($sql2);
        $q3 = $this->db->query($sql3);
        $q4   = $this->db->query($sql4);
        $q5 = $this->db->query($sql5);
        if ($q === TRUE) {
            return "Profile deleted successfully";
        } else {
            return "Error updating delete: ";
        }
    }


}