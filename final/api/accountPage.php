<?php
    include_once('../config/init.php');
    include_once($BASE_DIR .'database/user.php');
    include_once($BASE_DIR .'database/article.php');

    $page = $_GET["page"];
    $name = $_GET["name"];
    $minRating = $_GET["minRating"];
    $limit = $_GET["limit"];
    $offset = $_GET["offset"];
    $order = $_GET["order"];
    if(!$limit) $limit = 10;
    if(!$offset) $offset = 0;

    try {
        $recommend = false;
        switch ($page) {
            case 'editProfile':
                $info = accountInfo($_SESSION["id"]);
                $smarty->assign('info', $info);
                $filename = "edit_profile.tpl";
                $mostRecent = getMostRecentArticles();
                $smarty->assign('mostRecent', $mostRecent);
                $recommend = true;
                break;
            case 'followers':
                $followers = getFollowers($_SESSION["id"], $name, $minRating, $limit, $offset, $order);
                $smarty->assign('follows', $followers);
                $filename = "followers.tpl";
                $smarty->assign('pageNo', $offset);
                $smarty->assign('length', count($followers));
                $smarty->assign('limit', $limit);
                break;
            case 'following':
                $following = getFollowing($_SESSION["id"], $name, $minRating, $limit, $offset, $order);
                $smarty->assign('follows', $following);
                $filename = "following.tpl";
                $smarty->assign('pageNo', $offset);
                $smarty->assign('length', count($following));
                $smarty->assign('limit', $limit);
                break;
            case 'articlesModerated':
                $moderated = ownModerated($_SESSION["id"], $name, $minRating, $limit, $offset, $order);
                $smarty->assign('moderated', $moderated);
                $filename = "moderated_articles.tpl";
                $smarty->assign('pageNo', $offset);
                $smarty->assign('length', count($moderated));
                $smarty->assign('limit', $limit);
                break;
            case 'delete':
                $filename = "delete.tpl";
                $mostRecent = getMostRecentArticles();
                $smarty->assign('mostRecent', $mostRecent);
                $recommend = true;
                break;
            case 'notifications':
                $filename = "notifications.tpl";
                $mostRecent = getMostRecentArticles();
                $smarty->assign('mostRecent', $mostRecent);
                $recommend = true;
                break;
            case 'statistics':
                break;
            //check if admin
            case 'listUsers':
                $users = getAllUsers($name, $minRating, $limit, $offset, $order);
                $smarty->assign('users', $users);
                $filename = "list_users.tpl";
                $smarty->assign('pageNo', $offset);
                $smarty->assign('length', count($users));
                $smarty->assign('limit', $limit);
                break;
            case 'teamManagement':
                $users = getStaff($name, $minRating, $limit, $offset, $order);
                $smarty->assign('users', $users);
                $filename = "list_users.tpl";
                $smarty->assign('pageNo', $offset);
                $smarty->assign('length', count($users));
                $smarty->assign('limit', $limit);

                break;
            case 'articlesPending':
                $hiddenArticles = getHiddenArticles(null);
                $smarty->assign('hiddenArticles', $hiddenArticles);
                $filename = "pending_articles.tpl";
                $mostRecent = getMostRecentArticles();
                $smarty->assign('mostRecent', $mostRecent);
                $smarty->assign('pageNo', $offset);
                $smarty->assign('length', count($hiddenArticles));
                $smarty->assign('limit', $limit);
                $recommend = true;
                break;
            case 'articlesReported':
                $reportedArticles = getReportedArticles(null);
                $smarty->assign('reportedArticles', $reportedArticles);
                $filename = "reported_articles.tpl";
                $mostRecent = getMostRecentArticles();
                $smarty->assign('mostRecent', $mostRecent);
                $smarty->assign('pageNo', $offset);
                $smarty->assign('length', count($reported_articles));
                $smarty->assign('limit', $limit);
                $recommend = true;
                break;
            case 'commentsReported':
                $reportedComments = getReportedComments(null);
                $smarty->assign('reportedComments', $reportedComments);
                $filename = "reported_comments.tpl";
                $mostRecent = getMostRecentArticles();
                $smarty->assign('mostRecent', $mostRecent);
                $smarty->assign('pageNo', $offset);
                $smarty->assign('length', count($reported_comments));
                $smarty->assign('limit', $limit);
                $recommend = true;
                break;
            default:
                # code...
                break;
        }

        if($recommend){
            $ret['side']= $smarty->fetch($BASE_DIR . "templates/common/recommended_side.tpl");
        } else{
            $ret['side'] = $smarty->fetch($BASE_DIR . "templates/account/accountFilter.tpl");
        }

        $output = $smarty->fetch($BASE_DIR . "templates/account/" . $filename);
        $ret['main'] = $output;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    echo json_encode($ret);
    //echo $output;
?>
