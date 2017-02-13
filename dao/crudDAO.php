<?php

class CrudDAO
{

    //create
    public function create($name, $email, $address, $mob)
    {
        global $db;

        $sql = "INSERT INTO users SET name = '$name', email='$email', address='$address', mob='$mob'";

        $result = $db->query($sql);

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    //read
    public function read()
    {
        global $db;

        $sql = "SELECT * FROM users ORDER BY id";

        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            $i = 0;
            $list = "";

            while ($row = $result->fetch_assoc()) {
                $list[$i] = $row;
                $i++;
            }
            return $list;
        } else {
            return false;
        }
    }

    //update
    public function GetEdit($id)
    {
        global $db;

        $sql = "SELECT * FROM users WHERE id = '{$id}' ";

        $result = $db->query($sql);

        if ($result->num_rows > 0) {


            $row = $result->fetch_assoc();

            return $row;
        } else {
            return false;
        }
    }

    public function update($id, $name, $email, $address, $mob)
    {
        global $db;

        $sql = "UPDATE users SET name = '$name', email='$email', address='$address', mob='$mob'  WHERE id = '{$id}'";

        $result = $db->query($sql);

        if ($result) {
            return $result;
        } else {
            return false;
        }

    }


    //delete

    public function delete($id)
    {
        global $db;

        $sql = "DELETE FROM users WHERE id = '{$id}'";

        $result = $db->query($sql);

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }


    //authenticate
    public function authenticate($username, $password, $level)
    {
        global $db;

        $query = mysqli_query($db, "SELECT * FROM users WHERE username='$username' AND password='$password'");
        if (mysqli_num_rows($query) == 0) {
            echo '<div class="alert alert-danger">Login failed!</div>';
        } else {
            $row = mysqli_fetch_assoc($query);

            if ($row['level'] == 1 && $level == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['level'] = 'Administrator';
                header("Location: admin/dashboard.php");
            } else if ($row['level'] == 2 && $level == 2) {
                $_SESSION['username'] = $username;
                $_SESSION['level'] = 'Lecturer';
                header("Location: lecturer/dashboard.php");
            } else if ($row['level'] == 3 && $level == 3) {
                $_SESSION['username'] = $username;
                $_SESSION['level'] = 'Student';
                header("Location: student/dashboard.php");
            } else {
                echo '<div class="alert alert-danger">Login failed!.</div>';
            }
        }
    }


    //register
    public function register($username, $password, $nama , $email , $level)
    {
        global $db;

        $sql = "INSERT INTO users SET username = '$username', password= MD5('$password'), nama='$nama',email='$email', level='$level'";

        $result = $db->query($sql);

        if ($result) {
           // echo "success"; die;
            return $result;
        } else {
           // echo "unsuccess"; die;
            return false;
        }
    }

    //add new subjects
    public function addSubjects($subject_name,$subject_code,$subject_enrollment,$enroller, $year, $semester)
    {
        global $db;

        $sql = "INSERT INTO subjects SET subject_name = '$subject_name', subject_code='$subject_code' , subject_enrollment= MD5('$subject_enrollment'), enroller = '$enroller' , year = '$year' , semester = '$semester'";

        $result = $db->query($sql);

        if ($result) {
            // echo "success"; die;
            return $result;
        } else {
            // echo "unsuccess"; die;
            return false;
        }
    }




    //read Subects for admin
    public function readSubjectsForAdmin()
    {
        global $db;

        $sql = "SELECT id, subject_name , subject_code, enroller FROM subjects ORDER BY id";

        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            $i = 0;
            $list = "";

            while ($row = $result->fetch_assoc()) {
                $list[$i] = $row;
                $i++;
            }
            return $list;
        } else {
            return false;
        }
    }






    //read Subects for Lcturer
    public function readSubjectsForLecturer()
    {
        global $db;

        $sql = "SELECT id, subject_name , subject_code, enroller , year , semester  FROM subjects WHERE  enroller = 'lecturer' ORDER BY id";

        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            $i = 0;
            $list = "";

            while ($row = $result->fetch_assoc()) {
                $list[$i] = $row;
                $i++;
            }
            return $list;
        } else {
            return false;
        }
    }


    //read Subects for Lcturer
    public function readSubjectsForLecturerSortByYearandSemester($year , $semester)
    {

        //echo $year; die;
        global $db;

        $sql = "SELECT id, subject_name , subject_code, enroller , year  FROM subjects WHERE  enroller = 'lecturer' and  year = '$year' and semester='$semester' ORDER BY id";

        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            $i = 0;
            $list = "";

            while ($row = $result->fetch_assoc()) {
                $list[$i] = $row;
                $i++;
            }
            return $list;
        } else {
            return false;
        }
    }


    //read Subects for Lcturer
    public function readSubjectsForStudentSortByYearandSemester($year , $semester)
    {

        //echo $year; die;
        global $db;

        $sql = "SELECT id, subject_name , subject_code, enroller , year  FROM subjects WHERE  enroller = 'student' and  year = '$year' and semester='$semester' ORDER BY id";

        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            $i = 0;
            $list = "";

            while ($row = $result->fetch_assoc()) {
                $list[$i] = $row;
                $i++;
            }
            return $list;
        } else {
            return false;
        }
    }



    //read Subects for student
    public function readSubjectsForStudent()
    {
        global $db;

        $sql = "SELECT id, subject_name , subject_code, enroller  FROM subjects WHERE  enroller = 'student' ORDER BY id";

        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            $i = 0;
            $list = "";

            while ($row = $result->fetch_assoc()) {
                $list[$i] = $row;
                $i++;
            }
            return $list;
        } else {
            return false;
        }
    }

    //delete subjcts
    public function deleteSubjects($id)
    {
        global $db;

        $sql = "DELETE FROM subjects WHERE id = '{$id}'";

        $result = $db->query($sql);

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    //enroll
    //authenticate
    public function enroll($id, $subject_enrollment, $enroller)
    {


        global $db;

        $query = mysqli_query($db, "SELECT * FROM subjects WHERE id='$id' AND subject_enrollment='$subject_enrollment'");


        if (mysqli_num_rows($query) == 0) {
            echo '<div class="alert alert-danger">Invalid Enrollment!</div>';
        } else {
            $row = mysqli_fetch_assoc($query);

            if ($row['enroller'] == 'lecturer' &&  $enroller == 'lecturer') {
               // $_SESSION['username'] = $username;
               // $_SESSION['level'] = 'Administrator';
                header("Location: lecturer/addSubjectItems.php?id=$id");
            } else if($row['enroller'] == 'student' && $enroller== 'student') {
               // $_SESSION['username'] = $username;
               // $_SESSION['level'] = 'Lecturer';
                header("Location: student/addSubjectItems.php?id=$id");
            }else {
                echo '<div class="alert alert-danger">Enrollent failed!.</div>';
            }
        }
    }

    public function enrollForviewSubjectItems($id, $subject_enrollment, $enroller, $item_name,$subject_name)
    {


        global $db;

        $query = mysqli_query($db, "SELECT * FROM subjects WHERE id='$id' AND subject_enrollment='$subject_enrollment'");


        if (mysqli_num_rows($query) == 0) {
            echo '<div class="alert alert-danger">Invalid Enrollment!</div>';
        } else {
            $row = mysqli_fetch_assoc($query);

            if ($row['enroller'] == 'lecturer' &&  $enroller == 'lecturer') {
                // $_SESSION['username'] = $username;
                // $_SESSION['level'] = 'Administrator';
                header("Location: lecturer/readSubjectItems2.php?id=$id&subject_name=$subject_name");
            } else if($row['enroller'] == 'student' && $enroller== 'student') {
                // $_SESSION['username'] = $username;
                // $_SESSION['level'] = 'Lecturer';
                header("Location: student/readSubjectItems2.php?id=$id&subject_name=$subject_name");
            }else {
                echo '<div class="alert alert-danger">Enrollent failed!.</div>';
            }
        }
    }

    public function enrollForviewSubjectItems1($id, $subject_enrollment, $enroller, $item_name,$subject_name)
    {


        global $db;

        $query = mysqli_query($db, "SELECT * FROM subjects WHERE id='$id' AND subject_enrollment='$subject_enrollment'");


        if (mysqli_num_rows($query) == 0) {
            echo '<div class="alert alert-danger">Invalid Enrollment!</div>';
        } else {
            $row = mysqli_fetch_assoc($query);

            if ($row['enroller'] == 'lecturer' &&  $enroller == 'lecturer') {
                // $_SESSION['username'] = $username;
                // $_SESSION['level'] = 'Administrator';
                header("Location: lecturer/readSubjectItems3.php?id=$id&subject_name=$subject_name");
            } else if($row['enroller'] == 'student' && $enroller== 'student') {
                // $_SESSION['username'] = $username;
                // $_SESSION['level'] = 'Lecturer';
                header("Location: student/readSubjectItems3.php?id=$id&subject_name=$subject_name");
            }else {
                echo '<div class="alert alert-danger">Enrollent failed!.</div>';
            }
        }
    }


public function addSubjectitems($item_name,$item_description,$item_url,$subject_name,$item_type,$username, $enroller){
    global $db;

    $sql = "INSERT INTO subjectitems SET item_name ='$item_name', item_description='$item_description', 

   item_url='$item_url',subject_name ='$subject_name', item_type='$item_type', username='$username', enroller='$enroller' ";



    $result = $db->query($sql);

    //print_r($result); die;

    if ($result) {
        return $result;
    } else {

       // echo "in"; die;

        return false;
    }
}


    //read Subects items
    public function readSubjectItems()
    {
        global $db;

        $sql = "SELECT * FROM subjectitems ";

        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            $i = 0;
            $list = "";

            while ($row = $result->fetch_assoc()) {
                $list[$i] = $row;
                $i++;
            }
            return $list;
        } else {
            return false;
        }
    }


    //delete subject items
    //delete subjcts
    public function deleteSubjectItems($id)
    { 
        global $db;

        $sql = "DELETE FROM subjectitems WHERE item_id = '{$id}'";

        $result = $db->query($sql);

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }


    //update subject items
    public function GetEditSubjectItems($id)
    {
        global $db;

        $sql = "SELECT * FROM users WHERE item_id = '{$id}' ";

        $result = $db->query($sql);

        if ($result->num_rows > 0) {


            $row = $result->fetch_assoc();

            return $row;
        } else {
            return false;
        }
    }

    //read Subects items for each subject
    public function readSubjectItemsForEachSubject($subject_name)
    {
        global $db;

        $sql = "SELECT * FROM subjectitems WHERE subject_name = '{$subject_name}' and enroller='lecturer'";

        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            $i = 0;
            $list = "";

            while ($row = $result->fetch_assoc()) {
                $list[$i] = $row;
                $i++;
            }
            return $list;
        } else {
            return false;
        }
    }


//read Subects items for each subject
    public function readSubjectItemsForEachSubject2($subject_name )
    {
        global $db;

        $sql = "SELECT * FROM subjectitems WHERE subject_name = '{$subject_name}' and enroller='lecturer'";


        //print_r($sql); die;

        $result = $db->query($sql);



        if ($result->num_rows > 0) {
            $i = 0;
            $list = "";

            while ($row = $result->fetch_assoc()) {
                $list[$i] = $row;
                $i++;
            }
            return $list;
        } else {
            return false;
        }
    }


//read Subects items for each subject
    public function readSubjectItemsForEachSubject3($subject_name)
    {
        global $db;

        $sql = "SELECT * FROM subjectitems WHERE subject_name = '{$subject_name}' and enroller='student'";

        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            $i = 0;
            $list = "";

            while ($row = $result->fetch_assoc()) {
                $list[$i] = $row;
                $i++;
            }
            return $list;
        } else {
            return false;
        }
    }


    public function createEventItem($event_title,$event_place,$enrolller,$event_start,$event_end)
    {
        global $db;

        $sql = "INSERT INTO events SET event_title = '$event_title', event_place='$event_place', enrolller='$enrolller', event_start='$event_start', event_end='$event_end'";

        $result = $db->query($sql);

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }


    public function  createNotificationItem($notification_title,$notification_description, $enroller , $subject)
    {
        global $db;

        $sql = "INSERT INTO notifications SET notification_title = '$notification_title', notification_description='$notification_description', enroller='$enroller', subject = '$subject'";

        $result = $db->query($sql);

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }



    ///read events specific to id
    //read Subects for student
    public function readEventsById($id)
    {
        global $db;

        $sql = "SELECT  *  FROM events WHERE  event_id = '$id' ORDER BY event_id";

        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            $i = 0;
            $list = "";

            while ($row = $result->fetch_assoc()) {
                $list[$i] = $row;
                $i++;
            }
            return $list;
        } else {
            return false;
        }
    }


    //delete events
    public function  deleteEvents($id)
    {
        global $db;

        $sql = "DELETE FROM events WHERE event_id = '{$id}'";

        $result = $db->query($sql);

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }


    // update events
    public function GetEditEvents($id)
    {
        global $db;

        $sql = "SELECT * FROM events WHERE event_id = '{$id}' ";

        $result = $db->query($sql);

        if ($result->num_rows > 0) {


            $row = $result->fetch_assoc();

            return $row;
        } else {
            return false;
        }
    }


    public function updateEvents($event_title,$event_place,$enrolller,$event_start,$event_end, $id){
        global $db;

        //$sql = "UPDATE users SET name = '$name', email='$email', address='$address', mob='$mob'  WHERE id = '{$id}'";
        $sql = "UPDATE  events SET event_title = '$event_title', event_place='$event_place', enrolller='$enrolller', event_start='$event_start', event_end='$event_end' WHERE event_id = '{$id}'";


        $result = $db->query($sql);

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

}



?>

