<?phpif ($_POST['submitValue'] == 'new') {    if (!$_POST['company_name']) {        $err[] = _("YOUDONTFILLCOMPANYNAME");    }    if (!$err) {        if (!query("INSERT INTO company (`company_name`) VALUES ('".$_POST['company_name']."');")){            $db_err[] = "DBINSERTERROR";            $smarty->assign("err", $db_err);        }else{            $list_sql = query("SELECT ID_company FROM company WHERE company_name=".$_POST['company_name']." ORDER BY ID_company DESC  limit 1;");            $id = fetch_array($list_sql);            $id = $id[0]['ID_company'];            if (!query("INSERT INTO rule_access (`company_ID_company`,`users_id`, `is_admin`, `is_member`, `edit_company`, `edit_area`, `edit_control`, `edit_lamp`) VALUES ('".$id."','".$_SESSION['user']['id']."', '1', '1', '1', '1', '1', '1');")){                $db_err[] = "DBINSERTERROR";                $smarty->assign("err", $db_err);            }else{            }            go($setup['adm']['www'].'companies/list.html?copmany='.$id);        }    } else {        $smarty->assign("err", $err);    }}?>