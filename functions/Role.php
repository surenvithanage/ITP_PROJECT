<?php

class Role
{
    protected $permissions;

    protected function __construct() {
        $this->permissions = array();
    }

    // return a role object with associated permissions
    public static function getRolePerms($role_id) {
    $conn = new mysqli("localhost", "root", "dragonballz1", "jayanthi_payroll");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT t2.perm_desc FROM role_perm as t1
                JOIN permissions as t2 ON t1.perm_id = t2.perm_id
                WHERE t1.role_id = ".$role_id.";";
    $result = $conn->query($sql);
    $role = new Role();
    
    if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
    }  


    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
           $role->permissions[$row["perm_desc"]] = true;
        }

        }
        return $role;
    }

    // check if a permission is set
    public function hasPerm($permission) {
        return isset($this->permissions[$permission]);
    }


    // insert a new role
    public static function insertRole($role_name) {
        $conn = new mysqli("localhost", "root", "dragonballz1", "jayanthi_payroll");

        $sql = "INSERT INTO roles (role_name) VALUES ('$role_name')";

        mysqli_query($conn,$sql);

        header('Location: ../role_view.php');
    }

    // insert array of roles for specified user id
    public static function insertUserRoles($user_id, $roles) {
        $conn = new mysqli("localhost", "root", "dragonballz1", "jayanthi_payroll");

        $sql = "INSERT INTO user_role (user_id, role_id) VALUES ('$user_id','$roles')";

        mysqli_query($conn,$sql);

        header('Location: ../role_view.php');
    }

    // delete array of roles, and all associations
    public static function deleteRoles($roles) {
        $conn = new mysqli("localhost", "root", "dragonballz1", "jayanthi_payroll");
        $sql = "DELETE t1, t2, t3 FROM roles as t1
            JOIN user_role as t2 on t1.role_id = t2.role_id
            JOIN role_perm as t3 on t1.role_id = t3.role_id
            WHERE t1.role_id = :role_id";
        $sth = $conn -> query($sql);
        $sth->bindParam(":role_id", $role_id, PDO::PARAM_INT);
        foreach ($roles as $role_id) {
            $sth->execute();
        }
        return true;
    }

    // delete ALL roles for specified user id
    public static function deleteUserRoles($user_id) {
        $conn = new mysqli("localhost", "root", "dragonballz1", "jayanthi_payroll");
        $sql = "DELETE FROM user_role WHERE user_id = :user_id";
        $sth = $conn -> query($sql);
        return $sth->execute(array(":user_id" => $user_id));
    }
}