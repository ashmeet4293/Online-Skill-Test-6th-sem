-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2017 at 07:49 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_Name` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `security_question` varchar(200) DEFAULT NULL,
  `Answer` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_Name`, `Password`, `security_question`, `Answer`) VALUES
('dharmesh', '4168', 'Who is your favorite cricketer?', 'VK');

-- --------------------------------------------------------

--
-- Table structure for table `cpptest`
--

CREATE TABLE `cpptest` (
  `question_no` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `Exam_Name` varchar(100) DEFAULT NULL,
  `E_id` int(11) DEFAULT NULL,
  `question` varchar(200) DEFAULT NULL,
  `option1` varchar(200) DEFAULT NULL,
  `option2` varchar(200) DEFAULT NULL,
  `option3` varchar(200) DEFAULT NULL,
  `option4` varchar(200) DEFAULT NULL,
  `answer` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpptest`
--

INSERT INTO `cpptest` (`question_no`, `question_id`, `Exam_Name`, `E_id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 1, 'c++', 1, 'What is Data Hiding in C++?', 'It is related with hiding internal object details', 'It is related with showing internal object details', 'It irelated with datatypes', 'none of the above', '1'),
(2, 1, 'c++', 1, 'What is purpose of abstract class ?', 'to provide help with database connectivity.', 'to provide data input to other classes.', 'to provide security to other classes.', 'to provide an appropriate base class from which other classes can inherit.', '4'),
(3, 1, 'c++', 1, 'Which is more memory efficient?', 'structure.', 'union.', 'both use same memory.', 'depends on a programmer.', '2'),
(4, 1, 'c++', 1, 'How we can access data members using objects ?', 'object@datamember.', 'object*datamember.', 'object->datamember.', 'object.datamember.', '4'),
(5, 1, 'c++', 1, 'Which among following is not a valid visibility mode in c++ program ?', 'Private.', 'Public.', 'Protected.', 'Limited.', '4'),
(6, 1, 'c++', 1, 'What is true about Constructor?', 'Its name is plural of class name..', 'Its name has * symbol before it.', 'Its name is same as of class name.', 'Its name has # symbol before it.', '3'),
(7, 1, 'c++', 1, 'The major goal of inheritance in C++ is ?', 'To facilitate the reusability of code', 'To help modular programming.', 'To facilitate the conversion of data types.', 'To extend the capabilities of a class.', '1'),
(8, 1, 'c++', 1, 'Which of the following cannot be passed to a function ?', 'Array.', 'Reference variable.', 'Object.', 'File.', '4'),
(9, 1, 'c++', 1, 'Size of a char in c++ is?', '1', '2', '3', '4', '1'),
(10, 1, 'c++', 1, 'Which of following valid option will not return a value in c++.', 'Free.', 'Void.', 'Empty.', 'Null.', '2');

-- --------------------------------------------------------

--
-- Table structure for table `csharptest`
--

CREATE TABLE `csharptest` (
  `question_no` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `Exam_Name` varchar(200) DEFAULT NULL,
  `E_id` int(11) DEFAULT NULL,
  `question` varchar(200) DEFAULT NULL,
  `option1` varchar(200) DEFAULT NULL,
  `option2` varchar(200) DEFAULT NULL,
  `option3` varchar(200) DEFAULT NULL,
  `option4` varchar(200) DEFAULT NULL,
  `answer` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `csharptest`
--

INSERT INTO `csharptest` (`question_no`, `question_id`, `Exam_Name`, `E_id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 3, 'c#', 3, 'Which of the following .NET \r\n\r\ncomponents can be used to remove unused references from the managed heap?', 'Common Language Infrastructure.', 'CLR', 'Garbage Collector', 'CTS', '3'),
(2, 3, 'c#', 3, 'Which of the following \r\n\r\nassemblies can be stored in Global Assembly Cache?', 'Private   Assemblies', 'Public Assemblies', 'Shared Assemblies', 'Protected Assemblies', '3'),
(3, 3, 'c#', 3, 'Code that targets the Common \r\n\r\nLanguage Runtime is known as', 'Native Code', 'Managed Code', 'Distributed', 'Unmanaged code', '2'),
(4, 3, 'c#', 3, 'Which of the following is the \r\n\r\nroot of the .NET type hierarchy?', 'System.Object', 'System.Base', 'System.Root', 'System.Root', '1'),
(5, 3, 'c#', 3, 'Which of the following is the \r\n\r\nnecessary condition for implementing delegates?', 'Class declaration', 'Inheritance', 'Run-time Polymorphism', 'Compile-time Polymorphism', '1'),
(6, 3, 'c#', 3, 'How many values is a function \r\n\r\ncapable of returning?', '0', '1', 'Depends upon how many params arguments does it use.', 'Depends upon how many ref arguments does it use', '2'),
(7, 3, 'c#', 3, 'Which of the following CANNOT \r\n\r\noccur multiple number of times in a  program?', 'namespace', 'Class', 'Entrypoint', 'Function', '3'),
(8, 3, 'c#', 3, 'Which of the following is NOT an \r\n\r\nAssignment operator in C#.NET?', '=', '/=', '%=', '+=', '1'),
(9, 3, 'c#', 3, 'When would a structure variable \r\n\r\nget destroyed?', 'When no reference refers to it will get garbage collected.', 'Depends upon whether it is created using new or without using \r\n\r\nnew.', 'When it goes out of scope.', 'Depends upon the Project Settings made in Visual Studio.NET.', '3'),
(10, 3, 'c#', 3, 'Which statement is/are \r\n\r\ncorrect?', 'An argument passed to a ref parameter need not to be initialized first', 'variables passed as out arguments need to be initialized prior to \r\n\r\nbeing passed', 'to use a ref parameter, only the calling method must explicitly use the ref keyword', 'None of the mentioned', '4');

-- --------------------------------------------------------

--
-- Table structure for table `ctest`
--

CREATE TABLE `ctest` (
  `question_no` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `Exam_Name` varchar(200) DEFAULT NULL,
  `E_id` int(11) DEFAULT NULL,
  `question` varchar(200) DEFAULT NULL,
  `option1` varchar(200) DEFAULT NULL,
  `option2` varchar(200) DEFAULT NULL,
  `option3` varchar(200) DEFAULT NULL,
  `option4` varchar(200) DEFAULT NULL,
  `answer` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ctest`
--

INSERT INTO `ctest` (`question_no`, `question_id`, `Exam_Name`, `E_id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 5, 'c', 5, 'The keyword used to transfer control \r\n\r\nfrom a function back to the calling function is_________ .', 'switch', 'goto', 'go back', 'return', '4'),
(2, 5, 'c', 5, 'Which header file should be included \r\n\r\nto use functions like malloc() and calloc()?', 'memory.h', 'stdlib.h', 'string.h', 'dos.h', '2'),
(3, 5, 'c', 5, 'Which of the following statements \r\n\r\nshould be used to obtain a remainder after dividing 3.14 by 2.1 ?', 'rem = 3.14 % 2.1;', 'rem = modf(3.14, 2.1); ', 'rem = fmod(3.14, 2.1);', 'Remainder \r\n\r\ncannot be obtain in floating point division.', '3'),
(4, 5, 'c', 5, 'Which of the following special symbol \r\n\r\nallowed in a variable name?', '*(asterisk)', '| (pipeline)', '- (hyphen)', '_ (underscore)', '4'),
(5, 5, 'c', 5, 'By default a real number is treated as \r\n\r\na', 'float', 'double', 'long double', 'far double', '2'),
(6, 5, 'c', 5, 'What will the function rewind() \r\n\r\ndo?', 'Reposition the file pointer to a character reverse.', 'Reposition the file pointer stream to end of file.', '	Reposition the file pointer \r\n\r\nto begining of that line.', 'Reposition the file pointer to begining of file.', '4'),
(7, 5, 'c', 5, 'What is stderr ?', 'standard \r\n\r\nerror', 'standard error types', 'standard error streams', 'standard error definitions', '3'),
(8, 5, 'c', 5, 'In C, if you pass an array as an \r\n\r\nargument to a function, what actually gets passed?', 'Value of elements in array', 'First element of the array)', 'Base address of the array', 'Address \r\n\r\nof the last element of array', '3'),
(9, 5, 'c', 5, 'Who is father of C Language?', 'Bjarne Stroustrup', 'James A. Gosling', 'Dennis Ritchie', 'Dr. E.F. Codd', '3'),
(10, 5, 'c', 5, 'What do the c and v in argv stands \r\n\r\nfor?', 'c means argument control v means argument vector.', 'c means argument count v means argument vertex.', 'c means argument count v means argument \r\n\r\nvector.', 'c means argument configuration v means argument visibility', '3');

-- --------------------------------------------------------

--
-- Table structure for table `exam7`
--

CREATE TABLE `exam7` (
  `E_id` int(11) NOT NULL,
  `exam_name` varchar(20) DEFAULT NULL,
  `no_of_questions` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam7`
--

INSERT INTO `exam7` (`E_id`, `exam_name`, `no_of_questions`) VALUES
(1, 'c++', '10'),
(2, 'java', '10'),
(3, 'c#', '10'),
(4, 'python', '10'),
(5, 'c', '10');

-- --------------------------------------------------------

--
-- Table structure for table `javatest`
--

CREATE TABLE `javatest` (
  `question_no` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `Exam_Name` varchar(100) DEFAULT NULL,
  `E_id` int(11) DEFAULT NULL,
  `question` varchar(200) DEFAULT NULL,
  `option1` varchar(200) DEFAULT NULL,
  `option2` varchar(200) DEFAULT NULL,
  `option3` varchar(200) DEFAULT NULL,
  `option4` varchar(200) DEFAULT NULL,
  `answer` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `javatest`
--

INSERT INTO `javatest` (`question_no`, `question_id`, `Exam_Name`, `E_id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 2, 'java', 2, 'Which class cannot be a subclass in java?', 'Abstract class', 'Parent class', 'Final class', 'none of the above', '3'),
(2, 2, 'java', 2, 'A Suspended thread can be revived by using?', 'start() method', 'Suspend() method', 'resume() method', 'yield() method', '3'),
(3, 2, 'java', 2, 'Which collection class associates values with keys, and orders the keys according to their natural order?', 'java.util.HashSet', 'java.util.LinkedList', 'java.util.TreeMap', 'java.util.SortedSet', '3'),
(4, 2, 'java', 2, 'Which of these operators is used to allocate memory to array variable in Java?', 'malloc', 'new malloc', 'new', 'calloc', '3'),
(5, 2, 'java', 2, 'Which statement is static and synchronized in JDBC API?', 'executeQuery()', 'executeUpdate()', 'prepareCall()', 'getConnection()', '4'),
(6, 2, 'java', 2, 'The class java.sql.Timestamp is associated with?', 'java.util.Time', 'java.sql.Time', 'java.util.Date', 'None of the above', '3'),
(7, 2, 'java', 2, 'Which method executes only once?', 'start()', 'service()', 'init()', 'Destroy()', '3'),
(8, 2, 'java', 2, 'Which of these is not a bitwise operator?', '&', '&=', '|=', '<=', '4'),
(9, 2, 'java', 2, ' Java is designed for the distributed environment of the Internet, because it handles _________ protocols.', 'UDP', 'TCP/IP', 'FTP', 'TEL', '2'),
(10, 2, 'java', 2, ' Can you pass List<String> to a method which accepts List<Object>?', 'Yes', 'No, but it wont give any error', 'This will lead to Compilation Error', 'This will lead to Runtime Error', '3');

-- --------------------------------------------------------

--
-- Table structure for table `pythontest`
--

CREATE TABLE `pythontest` (
  `question_no` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `Exam_Name` varchar(200) DEFAULT NULL,
  `E_id` int(11) DEFAULT NULL,
  `question` varchar(200) DEFAULT NULL,
  `option1` varchar(200) DEFAULT NULL,
  `option2` varchar(200) DEFAULT NULL,
  `option3` varchar(200) DEFAULT NULL,
  `option4` varchar(200) DEFAULT NULL,
  `answer` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pythontest`
--

INSERT INTO `pythontest` (`question_no`, `question_id`, `Exam_Name`, `E_id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 4, 'python', 4, 'What function do you use to \r\n\r\nread a string?', 'input("Enter a string")', 'eval(input("Enter a \r\nstring"))', 'enter("Enter a string")', 'eval(enter("Enter a string"))', '3'),
(2, 4, 'python', 4, 'In the expression 45 / 4, \r\n\r\nthe values on the left and right of the / symbol are called____.', 'operators', 'operands', 'arguments', 'Parameter', '2'),
(3, 4, 'python', 4, 'Given a string s = \r\n\r\n"Welcome", which of the following code is incorrect?', 'print(s[0])', 'print(s.lower())', 's[1] ="r" ', 'print(s.strip())', '3'),
(4, 4, 'python', 4, 'What is round\r\n\r\n(6.5)?', '4', '5', '7', '6', '4'),
(5, 4, 'python', 4, '__________ is to implement \r\n\r\none function in the structure chart at a time from the top to the \r\nbottom.', 'Bottom-up approach', 'Top-down approach', 'Bottom-up and top-down approach', 'Stepwise refinement', '2'),
(6, 4, 'python', 4, 'To start Python from the \r\n\r\ncommand prompt, use the command ________.', 'execute python', 'run python', 'python', 'go python', '3'),
(7, 4, 'python', 4, 'The __________ function \r\n\r\nimmediately terminates the program.', 'sys.terminate()', 'sys.halt\r\n()', 'sys.exit()', 'sys.stop()', '4'),
(8, 4, 'python', 4, 'Assume v1 = IntVar(), how do \r\n\r\nyou set a new value 5 to v1.', 'v1 = 5', 'v1.setValue(5)|', 'v1.get(5)', 'v1.set(5)', '4'),
(9, 4, 'python', 4, 'The format function returns \r\n\r\n_______.', 'a str', 'a float', 'a int', 'a date', '1'),
(10, 4, 'python', 4, 'To draw a circle of diameter \r\n\r\n10 with filled color red, use _________.', 'turtle.circle(5, \r\n"red").', 'turtle.circle(10, "red").', 'turtle.dot(5, "red").', 'turtle.dot(10, "red")', '3');

-- --------------------------------------------------------

--
-- Table structure for table `res`
--

CREATE TABLE `res` (
  `Student_Name` varchar(200) DEFAULT NULL,
  `s_id` int(11) DEFAULT NULL,
  `E_id` int(11) DEFAULT NULL,
  `Exam_Name` varchar(200) DEFAULT NULL,
  `marks_obtained` int(11) DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Fname` varchar(120) DEFAULT NULL,
  `s_id` int(11) NOT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `DOB` varchar(20) DEFAULT NULL,
  `Uname` varchar(120) DEFAULT NULL,
  `Pass` varchar(120) DEFAULT NULL,
  `Confirm_Pass` varchar(120) DEFAULT NULL,
  `Reg_Date` varchar(50) DEFAULT NULL,
  `security_question` varchar(250) DEFAULT NULL,
  `Answer` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cpptest`
--
ALTER TABLE `cpptest`
  ADD PRIMARY KEY (`question_no`),
  ADD KEY `fk02` (`E_id`);

--
-- Indexes for table `csharptest`
--
ALTER TABLE `csharptest`
  ADD PRIMARY KEY (`question_no`),
  ADD KEY `fk04` (`E_id`);

--
-- Indexes for table `ctest`
--
ALTER TABLE `ctest`
  ADD PRIMARY KEY (`question_no`),
  ADD KEY `fk6` (`E_id`);

--
-- Indexes for table `exam7`
--
ALTER TABLE `exam7`
  ADD PRIMARY KEY (`E_id`);

--
-- Indexes for table `javatest`
--
ALTER TABLE `javatest`
  ADD PRIMARY KEY (`question_no`),
  ADD KEY `fk03` (`E_id`);

--
-- Indexes for table `pythontest`
--
ALTER TABLE `pythontest`
  ADD PRIMARY KEY (`question_no`),
  ADD KEY `fk05` (`E_id`);

--
-- Indexes for table `res`
--
ALTER TABLE `res`
  ADD KEY `fk` (`E_id`),
  ADD KEY `fk1` (`s_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Uname` (`Uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cpptest`
--
ALTER TABLE `cpptest`
  MODIFY `question_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `csharptest`
--
ALTER TABLE `csharptest`
  MODIFY `question_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `ctest`
--
ALTER TABLE `ctest`
  MODIFY `question_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `javatest`
--
ALTER TABLE `javatest`
  MODIFY `question_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pythontest`
--
ALTER TABLE `pythontest`
  MODIFY `question_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cpptest`
--
ALTER TABLE `cpptest`
  ADD CONSTRAINT `fk02` FOREIGN KEY (`E_id`) REFERENCES `exam7` (`E_id`);

--
-- Constraints for table `csharptest`
--
ALTER TABLE `csharptest`
  ADD CONSTRAINT `fk04` FOREIGN KEY (`E_id`) REFERENCES `exam7` (`E_id`);

--
-- Constraints for table `ctest`
--
ALTER TABLE `ctest`
  ADD CONSTRAINT `fk6` FOREIGN KEY (`E_id`) REFERENCES `exam7` (`E_id`);

--
-- Constraints for table `javatest`
--
ALTER TABLE `javatest`
  ADD CONSTRAINT `fk03` FOREIGN KEY (`E_id`) REFERENCES `exam7` (`E_id`);

--
-- Constraints for table `pythontest`
--
ALTER TABLE `pythontest`
  ADD CONSTRAINT `fk05` FOREIGN KEY (`E_id`) REFERENCES `exam7` (`E_id`);

--
-- Constraints for table `res`
--
ALTER TABLE `res`
  ADD CONSTRAINT `fk` FOREIGN KEY (`E_id`) REFERENCES `exam7` (`E_id`),
  ADD CONSTRAINT `fk1` FOREIGN KEY (`s_id`) REFERENCES `students` (`s_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
