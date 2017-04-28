<?php
	include_once("../config/init.php");

	function getAllUsers($pageNo, $limit){
		global $conn;

		$stmt = $conn->prepare("SELECT public.users.name,
			 							public.users.email,
										public.users.photoURL,
										public.users.rating,
										public.users.permission,
										public.users.id
								FROM public.users
								ORDER BY public.users.name ASC
								OFFSET ?
								LIMIT ?");

		$stmt->execute(array($pageNo*$limit, $limit));
		return $stmt->fetchAll();
	}

	function getUser($email){
		global $conn;

		$user = $conn->prepare("SELECT * FROM public.users WHERE email = ?");
		$user->execute(array($email));
		return $user->fetch();
	}

	function isAdministrator($id){
		global $conn;

		$stmt = $conn->prepare("SELECT public.users.permission FROM public.users WHERE id = ?");
		$stmt->execute(array($id));
		$return = $stmt->fetch();
		return "Administrator" == $return["permission"];
	}

	function accountInfo($id){
		global $conn;

		$user = $conn->prepare("SELECT public.users.name, public.users.rating,
			public.users.permission,
		    SUM(CASE WHEN public.follower.idfollower = ? THEN 1 ELSE 0 END) AS following,
		    SUM(CASE WHEN public.follower.idfollowed = ? THEN 1 ELSE 0 END) AS followers
		    FROM public.users
		    LEFT JOIN public.follower ON (public.follower.idfollower = public.users.id OR public.follower.idfollowed = public.users.id)
		    WHERE public.users.id = ?
		    GROUP BY public.users.name, public.users.rating, public.users.permission, public.users.id");
		$user->execute(array($id, $id, $id));
		return $user->fetch();
	}

	function isLogin($id){
		if($id == null){
			$_SESSION["error_messages"] = "You need an account to access this page";
			header("Location: home.php");
		}
	}

	function getFollowing($id){
		global $conn;

		$stmt = $conn->prepare("SELECT public.users.name, public.follower.idFollowed
								FROM public.users
								JOIN public.follower ON (public.users.id = public.follower.idFollowed)
								WHERE public.follower.idFollower = ?");
		$stmt->execute(array($id));
		$return = $stmt->fetchAll();
		return $return;
	}
 ?>
