<?php
class PrivilegedUser 
{
    // Create connection

    private $roles;
    private $id=0;

    public function __construct() {
        //parent::__construct();
    }

    // override User method
    public static function getByUsername($username) 
    {
    // Create connection
    $conn = new mysqli("localhost", "root", "dragonballz1", "mega_power");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT * FROM users WHERE id = ".$username.";";
    $result = $conn->query($sql);
    
    if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
    }  

    //var_dump($result);

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            $user_id=$row["user_id"];
            $privUser = new PrivilegedUser();
            $privUser->id =  $row["id"];
            $privUser->name = $row["name"];
            $privUser->email = $row["email"];
            $privUser->username = $row["username"];
            $privUser->password = $row["password"];
            $privUser->initRoles();
            return $privUser;
        }
    } 
    else 
    {
        echo "0 results";
    }
    }

    // populate roles with their associated permissions
    protected function initRoles() {    

    $conn = new mysqli("localhost", "root", "dragonballz1", "mega_power");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT t1.role_id, t2.role_name FROM user_role as t1
                JOIN roles as t2 ON t1.role_id = t2.role_id
                WHERE t1.user_id = ".$this->user_id.";";
    $result = $conn->query($sql);
    $this->roles = array();
    if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
    }  


    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
           $this->roles[$row["role_name"]] = Role::getRolePerms($row["role_id"]);
        }
    } 
    else 
    {
        echo "0 results";
    }
}


    // check if user has a specific privilege
    public function hasPrivilege($perm) {
        foreach ($this->roles as $role) {
            if ($role->hasPerm($perm)) {
                return true;
            }
        }
        return false;
    }

    // check if a user has a specific role
    public function hasRole($role_name) {
        return isset($this->roles[$role_name]);
    }

    // insert a new role permission association
    public static function insertPerm($role_id, $perm_id) {
         $conn = new mysqli("localhost", "root", "dragonballz1", "mega_power");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "INSERT INTO role_perm (role_id, perm_id) VALUES ('$role_id','$perm_id')";

        mysqli_query($conn,$sql);

        header('Location: ../permission_view.php');

    }

    // delete ALL role permissions
    public static function deletePerms() {
        $conn = new mysqli("localhost", "root", "dragonballz1", "mega_power");

        $sql = "TRUNCATE role_perm";
        $sth = $conn->query($sql);
        return $sth->execute();
    }

}