START TRANSACTION;


CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_ip` varchar(111) NOT NULL,
  `user_name` varchar(111) NOT NULL,
  `user_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;