TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `insert_sem1info` AFTER INSERT ON `students` FOR EACH ROW INSERT INTO sem1info(subject, examcode, marks, maxmarks, grade, student_email, class) VALUES(\'MATHEMATICS\', \'UMA015\', NULL, 100, NULL, NEW.email, new.class)'
sql_modes=1098907648
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_unicode_ci'
db_cl_names='latin1_swedish_ci'
created=1681564103860459
