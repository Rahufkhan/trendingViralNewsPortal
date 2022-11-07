SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE 'category' (
  'category_id' int(11) NOT NULL,
  'category_name' varchar(100) NOT NULL,
  'post' int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE 'post' (
  'post_id' int(11) NOT NULL,
  'title' varchar(100) NOT NULL,
  'description' text NOT NULL,
  'category' varchar(100) NOT NULL,
  'post_date' varchar(50) NOT NULL,
  'author' int(11) NOT NULL,
  'post_img' varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE 'user' (
  'user_id' int(10) UNSIGNED NOT NULL,
  'first_name' varchar(30) NOT NULL,
  'last_name' varchar(30) NOT NULL,
  'username' varchar(30) DEFAULT NULL,
  'password' varchar(40) DEFAULT NULL,
  'role' int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE 'category'
  ADD PRIMARY KEY ('category_id');

  ALTER TABLE 'post'
  ADD PRIMARY KEY ('post_id'),
  ADD UNIQUE KEY 'post_id' ('post_id');

ALTER TABLE 'user'
  ADD PRIMARY KEY ('user_id');

ALTER TABLE 'category'
  MODIFY 'category_id' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

  ALTER TABLE 'post'
  MODIFY 'post_id' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;


ALTER TABLE 'user'
  MODIFY 'user_id' int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;
