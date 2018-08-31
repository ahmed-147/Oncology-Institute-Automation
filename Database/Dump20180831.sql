-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: seci
-- ------------------------------------------------------
-- Server version	5.7.18-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `adt`
--

DROP TABLE IF EXISTS `adt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adt` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `patient_code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `admission_date` date DEFAULT NULL,
  `admission_time` datetime(6) DEFAULT NULL,
  `ademission_dept` tinyint(3) unsigned DEFAULT NULL,
  `admission_unit` varchar(1) CHARACTER SET utf8mb4 DEFAULT NULL,
  `ademission_doctor` smallint(6) DEFAULT NULL,
  `discharge_date` date DEFAULT NULL,
  `discharge_dept` tinyint(3) unsigned DEFAULT NULL,
  `admission_reason` tinyint(3) unsigned DEFAULT NULL,
  `Operations` tinyint(3) unsigned DEFAULT NULL,
  `Discharge_condition` tinyint(3) unsigned DEFAULT NULL,
  `follow_up` tinyint(3) unsigned DEFAULT NULL,
  `follow_up_site` tinyint(3) unsigned DEFAULT NULL,
  `discharge_doctor` smallint(6) DEFAULT NULL,
  `consent_name` varchar(60) CHARACTER SET utf8mb4 DEFAULT NULL,
  `consent_ID` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL,
  `consent_relation` tinyint(3) unsigned DEFAULT NULL,
  `ward` tinyint(3) unsigned DEFAULT NULL,
  `admission OK` binary(1) DEFAULT NULL,
  `Discharge required` binary(1) DEFAULT NULL,
  `Laterlatity` tinyint(3) unsigned DEFAULT NULL,
  `Staging` tinyint(3) unsigned DEFAULT NULL,
  `Diag` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Topography` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Morphology` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Discharge Permit` binary(1) DEFAULT NULL,
  `room` varchar(5) CHARACTER SET utf8mb4 DEFAULT NULL,
  `file_no` longtext,
  `Pay_type` tinyint(3) unsigned DEFAULT NULL,
  `agree_type` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=212830 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `adt_agreements`
--

DROP TABLE IF EXISTS `adt_agreements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adt_agreements` (
  `agree_code` tinyint(3) unsigned NOT NULL,
  `agree_text` varchar(40) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`agree_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `adt_log_box`
--

DROP TABLE IF EXISTS `adt_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adt_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  `out_time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=68951 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `adt_pay_type`
--

DROP TABLE IF EXISTS `adt_pay_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adt_pay_type` (
  `Pay_code` tinyint(3) unsigned NOT NULL,
  `Pay_text` longtext,
  PRIMARY KEY (`Pay_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `adt_security`
--

DROP TABLE IF EXISTS `adt_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adt_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `adt_transfer`
--

DROP TABLE IF EXISTS `adt_transfer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adt_transfer` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `patient_code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `date` date DEFAULT NULL,
  `from_dept` tinyint(3) unsigned DEFAULT NULL,
  `from_ward` smallint(6) DEFAULT NULL,
  `to_dept` tinyint(3) unsigned DEFAULT NULL,
  `to_ward` tinyint(3) unsigned DEFAULT NULL,
  `transfer_doctor` smallint(6) DEFAULT NULL,
  `ADT number` int(11) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=35973 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all programs pass`
--

DROP TABLE IF EXISTS `all programs pass`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `all programs pass` (
  `Name` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(15) CHARACTER SET utf8mb4 DEFAULT NULL,
  `User name` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Pass_date` datetime(6) DEFAULT NULL,
  `sec_lev1` double DEFAULT NULL,
  `sec_lev2` double DEFAULT NULL,
  `sec_lev3` double DEFAULT NULL,
  `sec_lev4` double DEFAULT NULL,
  `sec_lev5` double DEFAULT NULL,
  `sec_lev6` double DEFAULT NULL,
  `sec_lev7` double DEFAULT NULL,
  `sec_lev8` double DEFAULT NULL,
  `sec_lev9` double DEFAULT NULL,
  `sec_lev10` double DEFAULT NULL,
  `sec_lev11` double DEFAULT NULL,
  `sec_lev12` double DEFAULT NULL,
  `sec_lev15` tinyint(3) unsigned DEFAULT NULL,
  `sec_lev16` tinyint(3) unsigned DEFAULT NULL,
  `sec_lev17` tinyint(3) unsigned DEFAULT NULL,
  `sec_lev18` tinyint(3) unsigned DEFAULT NULL,
  `sec_lev21` double DEFAULT NULL,
  `sec_lev22` double DEFAULT NULL,
  `sec_lev23` double DEFAULT NULL,
  `sec_lev24` double DEFAULT NULL,
  `sec_lev25` double DEFAULT NULL,
  `sec_lev26` tinyint(3) unsigned DEFAULT NULL,
  `sec_lev31` tinyint(3) unsigned DEFAULT NULL,
  `sec_lev32` tinyint(3) unsigned DEFAULT NULL,
  `sec_lev41` double DEFAULT NULL,
  `sec_lev42` double DEFAULT NULL,
  `sec_lev43` double DEFAULT NULL,
  `sec_lev44` double DEFAULT NULL,
  `sec_lev45` double DEFAULT NULL,
  `sec_lev46` double DEFAULT NULL,
  `sec_lev33` tinyint(3) unsigned DEFAULT NULL,
  `sec_lev34` tinyint(3) unsigned DEFAULT NULL,
  `sec_lev35` tinyint(3) unsigned DEFAULT NULL,
  `sec_lev36` tinyint(3) unsigned DEFAULT NULL,
  `sec_lev51` tinyint(3) unsigned DEFAULT NULL,
  `doc_level` tinyint(3) unsigned DEFAULT NULL,
  `doc_type` tinyint(3) unsigned DEFAULT NULL,
  `sec_lev52` tinyint(3) unsigned DEFAULT NULL,
  `sec_lev53` tinyint(3) unsigned DEFAULT NULL,
  `sec_lev54` tinyint(3) unsigned DEFAULT NULL,
  `sec_lev55` tinyint(3) unsigned DEFAULT NULL,
  `sec_lev56` tinyint(3) unsigned DEFAULT NULL,
  `sec_lev57` tinyint(3) unsigned DEFAULT NULL,
  `sec_lev58` tinyint(3) unsigned DEFAULT NULL,
  `sec_lev59` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `bb_ab screening`
--

DROP TABLE IF EXISTS `bb_ab screening`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bb_ab screening` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `request` int(11) DEFAULT NULL,
  `result` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `bb_bags`
--

DROP TABLE IF EXISTS `bb_bags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bb_bags` (
  `Bag ID` int(11) NOT NULL,
  `Donor ID` int(11) DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Tube ID` varchar(15) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Don to` tinyint(3) unsigned DEFAULT NULL,
  `Patient ID` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Bag ABO` varchar(2) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Bag RH` varchar(1) CHARACTER SET utf8mb4 DEFAULT NULL,
  `direction` tinyint(3) unsigned DEFAULT NULL,
  `Notes` longtext,
  `Out_date` datetime(6) DEFAULT NULL,
  `Out_patient ID` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Out_site` tinyint(3) unsigned DEFAULT NULL,
  `AUH_pay` tinyint(3) unsigned DEFAULT NULL,
  `packed` smallint(6) DEFAULT NULL,
  `Expir date` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Bag ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `bb_blood_group_entry`
--

DROP TABLE IF EXISTS `bb_blood_group_entry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bb_blood_group_entry` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Patient ID` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Name` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `At Date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=219 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `bb_coomb`
--

DROP TABLE IF EXISTS `bb_coomb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bb_coomb` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `request` int(11) DEFAULT NULL,
  `result` tinyint(3) unsigned DEFAULT NULL,
  `type` tinyint(3) unsigned DEFAULT NULL,
  `grade` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `bb_coombs_entry`
--

DROP TABLE IF EXISTS `bb_coombs_entry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bb_coombs_entry` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Serial` int(11) NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `At Date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `bb_donors`
--

DROP TABLE IF EXISTS `bb_donors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bb_donors` (
  `Donor ID` int(11) NOT NULL AUTO_INCREMENT,
  `Registration date` datetime(6) DEFAULT NULL,
  `Place` varchar(35) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Donor name` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `age` smallint(6) DEFAULT NULL,
  `gender` tinyint(3) unsigned DEFAULT NULL,
  `Donor Address` longtext,
  `Donor Address2` longtext,
  `Donor Tel` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Donor Tel2` varchar(11) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Gover` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL,
  `End date` datetime(6) DEFAULT NULL,
  `Last Donation date` datetime(6) DEFAULT NULL,
  `Q1` tinyint(3) unsigned DEFAULT NULL,
  `Q2` tinyint(3) unsigned DEFAULT NULL,
  `Q3` tinyint(3) unsigned DEFAULT NULL,
  `Q4` tinyint(3) unsigned DEFAULT NULL,
  `Q5` tinyint(3) unsigned DEFAULT NULL,
  `Q6` tinyint(3) unsigned DEFAULT NULL,
  `Q7` tinyint(3) unsigned DEFAULT NULL,
  `Q8` tinyint(3) unsigned DEFAULT NULL,
  `Q9` tinyint(3) unsigned DEFAULT NULL,
  `Q10` tinyint(3) unsigned DEFAULT NULL,
  `Q11` tinyint(3) unsigned DEFAULT NULL,
  `Q12` tinyint(3) unsigned DEFAULT NULL,
  `Q13` tinyint(3) unsigned DEFAULT NULL,
  `FQ1` tinyint(3) unsigned DEFAULT NULL,
  `FQ2` tinyint(3) unsigned DEFAULT NULL,
  `FQ3` tinyint(3) unsigned DEFAULT NULL,
  `Donor ABO` varchar(2) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Donor RH` varchar(1) CHARACTER SET utf8mb4 DEFAULT NULL,
  `direction` tinyint(3) unsigned DEFAULT NULL,
  `SBP` int(11) DEFAULT NULL,
  `DBP` int(11) DEFAULT NULL,
  `Weight` double DEFAULT NULL,
  `Hb` double DEFAULT NULL,
  `Exam` tinyint(3) unsigned DEFAULT NULL,
  `Doctor` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Donor ID`)
) ENGINE=InnoDB AUTO_INCREMENT=78525 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `bb_inp_request`
--

DROP TABLE IF EXISTS `bb_inp_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bb_inp_request` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `With_date` datetime(6) DEFAULT NULL,
  `With_time` datetime(6) DEFAULT NULL,
  `arr_date` datetime(6) DEFAULT NULL,
  `arr_time` datetime(6) DEFAULT NULL,
  `Dept` tinyint(3) unsigned DEFAULT NULL,
  `With_by` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Diag` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Fever` smallint(6) DEFAULT NULL,
  `Bleeding` smallint(6) DEFAULT NULL,
  `Hepatomegaly` smallint(6) DEFAULT NULL,
  `Splenomegaly` smallint(6) DEFAULT NULL,
  `Anemia` smallint(6) DEFAULT NULL,
  `Bleeding_hist` smallint(6) DEFAULT NULL,
  `Allergy_hist` smallint(6) DEFAULT NULL,
  `Transfusion_hist` smallint(6) DEFAULT NULL,
  `Drug_hist` smallint(6) DEFAULT NULL,
  `Fresh_blood` smallint(6) DEFAULT NULL,
  `Fresh_blood_bag` tinyint(3) unsigned DEFAULT NULL,
  `Cryoppt` smallint(6) DEFAULT NULL,
  `Cryoppt_unit` int(11) DEFAULT NULL,
  `Packed_RBCs` smallint(6) DEFAULT NULL,
  `Packed_RBCs_unit` int(11) DEFAULT NULL,
  `Platelet_conc` smallint(6) DEFAULT NULL,
  `Platelet_conc_unit` int(11) DEFAULT NULL,
  `Fresh_plasma` smallint(6) DEFAULT NULL,
  `Fresh_plasma_unit` int(11) DEFAULT NULL,
  `Plt_rich_plasma` smallint(6) DEFAULT NULL,
  `Plt_rich_plasma_unit` int(11) DEFAULT NULL,
  `Old_plasma` smallint(6) DEFAULT NULL,
  `Old_plasma_unit` int(11) DEFAULT NULL,
  `Washed_RBCs` smallint(6) DEFAULT NULL,
  `Washed_RBCs_unit` int(11) DEFAULT NULL,
  `Coombs` smallint(6) DEFAULT NULL,
  `Grouping` smallint(6) DEFAULT NULL,
  `Serology` smallint(6) DEFAULT NULL,
  `Ab_screening` smallint(6) DEFAULT NULL,
  `EDTA_sample` smallint(6) DEFAULT NULL,
  `Serum_sampe` smallint(6) DEFAULT NULL,
  `Physician` varchar(40) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Sig_date` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `bb_log_box`
--

DROP TABLE IF EXISTS `bb_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bb_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=13485 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `bb_matching`
--

DROP TABLE IF EXISTS `bb_matching`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bb_matching` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Mat_date` datetime(6) DEFAULT NULL,
  `Bag ID` int(11) DEFAULT NULL,
  `Donor ID` int(11) DEFAULT NULL,
  `Patient ID` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Status` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=19980 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `bb_out_request`
--

DROP TABLE IF EXISTS `bb_out_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bb_out_request` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `patient name` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Gender` tinyint(3) unsigned DEFAULT NULL,
  `Age` smallint(6) DEFAULT NULL,
  `With_date` datetime(6) DEFAULT NULL,
  `With_time` datetime(6) DEFAULT NULL,
  `arr_date` datetime(6) DEFAULT NULL,
  `arr_time` datetime(6) DEFAULT NULL,
  `Dept` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `With_by` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Diag` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Fever` smallint(6) DEFAULT NULL,
  `Bleeding` smallint(6) DEFAULT NULL,
  `Hepatomegaly` smallint(6) DEFAULT NULL,
  `Splenomegaly` smallint(6) DEFAULT NULL,
  `Anemia` smallint(6) DEFAULT NULL,
  `Bleeding_hist` smallint(6) DEFAULT NULL,
  `Allergy_hist` smallint(6) DEFAULT NULL,
  `Transfusion_hist` smallint(6) DEFAULT NULL,
  `Drug_hist` smallint(6) DEFAULT NULL,
  `Fresh_blood` smallint(6) DEFAULT NULL,
  `Fresh_blood_bag` int(11) DEFAULT NULL,
  `Cryoppt` smallint(6) DEFAULT NULL,
  `Cryoppt_unit` int(11) DEFAULT NULL,
  `Packed_RBCs` smallint(6) DEFAULT NULL,
  `Packed_RBCs_unit` int(11) DEFAULT NULL,
  `Platelet_conc` smallint(6) DEFAULT NULL,
  `Platelet_conc_unit` int(11) DEFAULT NULL,
  `Fresh_plasma` smallint(6) DEFAULT NULL,
  `Fresh_plasma_unit` int(11) DEFAULT NULL,
  `Plt_rich_plasma` tinyint(1) DEFAULT NULL,
  `Plt_rich_plasma_unit` int(11) DEFAULT NULL,
  `Old_plasma` smallint(6) DEFAULT NULL,
  `Old_plasma_unit` int(11) DEFAULT NULL,
  `Washed_RBCs` smallint(6) DEFAULT NULL,
  `Washed_RBCs_unit` int(11) DEFAULT NULL,
  `Coombs` smallint(6) DEFAULT NULL,
  `Grouping` smallint(6) DEFAULT NULL,
  `Serology` smallint(6) DEFAULT NULL,
  `Ab_screening` smallint(6) DEFAULT NULL,
  `EDTA_sample` smallint(6) DEFAULT NULL,
  `Serum_sampe` smallint(6) DEFAULT NULL,
  `Physician` varchar(40) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Sig_date` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `bb_patient blood group`
--

DROP TABLE IF EXISTS `bb_patient blood group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bb_patient blood group` (
  `patient code` varchar(8) CHARACTER SET utf8mb4 NOT NULL,
  `date` datetime(6) DEFAULT NULL,
  `ABO` varchar(2) CHARACTER SET utf8mb4 DEFAULT NULL,
  `RH` varchar(1) CHARACTER SET utf8mb4 DEFAULT NULL,
  `direction` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`patient code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `bb_plasma bags`
--

DROP TABLE IF EXISTS `bb_plasma bags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bb_plasma bags` (
  `Bag ID` int(11) NOT NULL,
  `Source bag ID` int(11) DEFAULT NULL,
  `Donor ID` int(11) DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Tube ID` varchar(15) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Don to` tinyint(3) unsigned DEFAULT NULL,
  `Patient ID` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Bag ABO` varchar(2) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Bag RH` varchar(1) CHARACTER SET utf8mb4 DEFAULT NULL,
  `direction` tinyint(3) unsigned DEFAULT NULL,
  `Notes` longtext,
  `Out_date` datetime(6) DEFAULT NULL,
  `Out_patient ID` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Out_site` tinyint(3) unsigned DEFAULT NULL,
  `AUH_pay` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Bag ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `bb_security`
--

DROP TABLE IF EXISTS `bb_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bb_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `bb_serology`
--

DROP TABLE IF EXISTS `bb_serology`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bb_serology` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Ser_Date` datetime(6) DEFAULT NULL,
  `Bag ID` int(11) DEFAULT NULL,
  `Patient ID` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `HCV` tinyint(3) unsigned DEFAULT NULL,
  `HBs` tinyint(3) unsigned DEFAULT NULL,
  `HIV` tinyint(3) unsigned DEFAULT NULL,
  `Syp` tinyint(3) unsigned DEFAULT NULL,
  `Donor ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=59812 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `bb_serology_entry`
--

DROP TABLE IF EXISTS `bb_serology_entry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bb_serology_entry` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Serial` int(11) NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `At Date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=402 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `billing_decisions`
--

DROP TABLE IF EXISTS `billing_decisions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `billing_decisions` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Dec_No` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Pat_ID` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Amount` double DEFAULT NULL,
  `Period` int(11) DEFAULT NULL,
  `Type1` smallint(6) DEFAULT NULL,
  `Type2` smallint(6) DEFAULT NULL,
  `Type3` smallint(6) DEFAULT NULL,
  `Type4` smallint(6) DEFAULT NULL,
  `Type5` smallint(6) DEFAULT NULL,
  `Type6` smallint(6) DEFAULT NULL,
  `Type7` smallint(6) DEFAULT NULL,
  `Type8` smallint(6) DEFAULT NULL,
  `Type9` smallint(6) DEFAULT NULL,
  `Type10` smallint(6) DEFAULT NULL,
  `Type11` smallint(6) DEFAULT NULL,
  `Type12` smallint(6) DEFAULT NULL,
  `Internal` smallint(6) DEFAULT NULL,
  `External` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=34592 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `billing_duration of decision`
--

DROP TABLE IF EXISTS `billing_duration of decision`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `billing_duration of decision` (
  `duration` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `billing_paid patients`
--

DROP TABLE IF EXISTS `billing_paid patients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `billing_paid patients` (
  `patient code` varchar(8) CHARACTER SET utf8mb4 NOT NULL,
  `Type` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`patient code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `billing_security`
--

DROP TABLE IF EXISTS `billing_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `billing_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `clinics`
--

DROP TABLE IF EXISTS `clinics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clinics` (
  `code` smallint(6) DEFAULT NULL,
  `clinic text` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `clinics_clinics data`
--

DROP TABLE IF EXISTS `clinics_clinics data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clinics_clinics data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `ticket_date` datetime(6) DEFAULT NULL,
  `ticket_no` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `clinic` tinyint(3) unsigned DEFAULT NULL,
  `Findings` longtext,
  `Diagnosis` longtext,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=15277 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `clinics_log_box`
--

DROP TABLE IF EXISTS `clinics_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clinics_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  `Out_time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `clinics_security`
--

DROP TABLE IF EXISTS `clinics_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clinics_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cp_back drug order details`
--

DROP TABLE IF EXISTS `cp_back drug order details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cp_back drug order details` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Serial` int(11) DEFAULT NULL,
  `drug id` smallint(6) DEFAULT NULL,
  `amount disp` int(11) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cp_back drug order details 2`
--

DROP TABLE IF EXISTS `cp_back drug order details 2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cp_back drug order details 2` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Serial` int(11) DEFAULT NULL,
  `drug id` smallint(6) DEFAULT NULL,
  `amount disp` int(11) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cp_back drug orders data`
--

DROP TABLE IF EXISTS `cp_back drug orders data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cp_back drug orders data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Date` datetime(6) DEFAULT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Order number` tinyint(3) unsigned DEFAULT NULL,
  `Dept` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cp_back drug orders data 2`
--

DROP TABLE IF EXISTS `cp_back drug orders data 2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cp_back drug orders data 2` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Date` datetime(6) DEFAULT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Order number` tinyint(3) unsigned DEFAULT NULL,
  `Dept` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cp_drug order details`
--

DROP TABLE IF EXISTS `cp_drug order details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cp_drug order details` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Serial` int(11) DEFAULT NULL,
  `drug id` smallint(6) DEFAULT NULL,
  `dose` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `internal pharmacy` smallint(6) DEFAULT NULL,
  `amount disp` int(11) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=94387 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cp_drug order details 2`
--

DROP TABLE IF EXISTS `cp_drug order details 2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cp_drug order details 2` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Serial` int(11) DEFAULT NULL,
  `drug id` smallint(6) DEFAULT NULL,
  `dose` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `internal pharmacy` smallint(6) DEFAULT NULL,
  `amount disp` int(11) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=73536 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cp_drug orders data`
--

DROP TABLE IF EXISTS `cp_drug orders data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cp_drug orders data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Date` datetime(6) DEFAULT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Order number` tinyint(3) unsigned DEFAULT NULL,
  `Dept` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=25390 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cp_drug orders data 2`
--

DROP TABLE IF EXISTS `cp_drug orders data 2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cp_drug orders data 2` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Date` datetime(6) DEFAULT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Order number` tinyint(3) unsigned DEFAULT NULL,
  `Dept` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=33516 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cp_log_box`
--

DROP TABLE IF EXISTS `cp_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cp_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  `out_time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=13031 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cp_security`
--

DROP TABLE IF EXISTS `cp_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cp_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `decisions_log_box`
--

DROP TABLE IF EXISTS `decisions_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `decisions_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  `out_time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=23869 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `code` tinyint(3) unsigned NOT NULL,
  `dept_text_arab` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `ward` tinyint(3) unsigned DEFAULT NULL,
  `Allow admision` bigint(20) DEFAULT NULL,
  `Private` bigint(20) DEFAULT NULL,
  `Beds` int(11) DEFAULT NULL,
  `spare_Beds` int(11) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `diagnosis_log_box`
--

DROP TABLE IF EXISTS `diagnosis_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diagnosis_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  `out_Time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=2333 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `diagnosis_security`
--

DROP TABLE IF EXISTS `diagnosis_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diagnosis_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `diet`
--

DROP TABLE IF EXISTS `diet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diet` (
  `code` tinyint(3) unsigned NOT NULL,
  `text` varchar(15) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `diet_log_box`
--

DROP TABLE IF EXISTS `diet_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diet_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  `out_Time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=15715 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `diet_security`
--

DROP TABLE IF EXISTS `diet_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diet_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `districts` (
  `code` varchar(20) DEFAULT NULL,
  `district_text` varchar(15) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `doc_belong`
--

DROP TABLE IF EXISTS `doc_belong`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doc_belong` (
  `Code` tinyint(3) unsigned NOT NULL,
  `Text` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Text Ar` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `doc_category`
--

DROP TABLE IF EXISTS `doc_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doc_category` (
  `Code` tinyint(3) unsigned NOT NULL,
  `Text` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Text Ar` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Group` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `doc_data`
--

DROP TABLE IF EXISTS `doc_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doc_data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Level` tinyint(3) unsigned DEFAULT NULL,
  `Belong` tinyint(3) unsigned DEFAULT NULL,
  `Group` tinyint(3) unsigned DEFAULT NULL,
  `Category` tinyint(3) unsigned DEFAULT NULL,
  `Type` tinyint(3) unsigned DEFAULT NULL,
  `Disc` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Disc Ar` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `file` longtext,
  `Code` varchar(24) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=246 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `doc_group`
--

DROP TABLE IF EXISTS `doc_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doc_group` (
  `Code` tinyint(3) unsigned NOT NULL,
  `Text` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Text Ar` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `doc_log_box`
--

DROP TABLE IF EXISTS `doc_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doc_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  `out_time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=275 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `doc_security`
--

DROP TABLE IF EXISTS `doc_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doc_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `doc_types`
--

DROP TABLE IF EXISTS `doc_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doc_types` (
  `Code` tinyint(3) unsigned NOT NULL,
  `Text` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL,
  `picture` longblob,
  PRIMARY KEY (`Code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctors` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) CHARACTER SET utf8mb4 DEFAULT NULL,
  `active` bigint(20) DEFAULT NULL,
  `Salary` int(11) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=698 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `flow morphology`
--

DROP TABLE IF EXISTS `flow morphology`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flow morphology` (
  `Code` varchar(3) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Morphology text` varchar(90) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Flow` tinyint(1) DEFAULT NULL,
  `order` tinyint(3) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `flow_immunopheno`
--

DROP TABLE IF EXISTS `flow_immunopheno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flow_immunopheno` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Specimen serial` int(11) DEFAULT NULL,
  `patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Header` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Lab number` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Specimen date` datetime(6) DEFAULT NULL,
  `Specimen time` datetime(6) DEFAULT NULL,
  `Report date` datetime(6) DEFAULT NULL,
  `Report time` datetime(6) DEFAULT NULL,
  `Specimen` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Samp_quality` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Diagnosis` longtext,
  `gated_cells` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row1` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row2` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row3` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row4` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row5` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row6` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row7` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row7a` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row7b` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row8` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row9` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row10` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row11` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row12` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row13` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row14` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row14a` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row14b` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row15` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row16` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row17` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row18` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row18a` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row18b` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row18c` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row19` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row20` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row20a` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row20b` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row21` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row22` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row23` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row24` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row25` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row26` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row27` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row28` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row31` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row32` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row33` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row34` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row35` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row36` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row41` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row42` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row43` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row44` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row45` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row46` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row47` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row51` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row52` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row53` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row54` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row55` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row56` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row57` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row58` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row61` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row62` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row71` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row72` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row73` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row74` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row75` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row76` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row77` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row78` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Morphology` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Comments` longtext,
  `NB` longtext,
  `Procedure` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Reference` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Signature` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=3600 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `flow_immunopheno specimens`
--

DROP TABLE IF EXISTS `flow_immunopheno specimens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flow_immunopheno specimens` (
  `Serial` double NOT NULL,
  `patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Dept` tinyint(3) unsigned DEFAULT NULL,
  `Specimen type` tinyint(3) unsigned DEFAULT NULL,
  `Specimen date` datetime(6) DEFAULT NULL,
  `Specimen time` datetime(6) DEFAULT NULL,
  `Request` tinyint(3) unsigned DEFAULT NULL,
  `CDs required` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Clinical data` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Payment` tinyint(3) unsigned DEFAULT NULL,
  `Referring doctor` smallint(6) DEFAULT NULL,
  `Referring doctor dept` smallint(6) DEFAULT NULL,
  `Fever` tinyint(3) unsigned DEFAULT NULL,
  `Bleeding` tinyint(3) unsigned DEFAULT NULL,
  `LN` tinyint(3) unsigned DEFAULT NULL,
  `Hepatomegaly` tinyint(3) unsigned DEFAULT NULL,
  `Liver_size` double DEFAULT NULL,
  `Splenomegaly` tinyint(3) unsigned DEFAULT NULL,
  `Spleen_size` double DEFAULT NULL,
  `Bone Tenderness` tinyint(3) unsigned DEFAULT NULL,
  `Osteolytic lesions` tinyint(3) unsigned DEFAULT NULL,
  `Treatment Protocol` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `TTT Start date` datetime(6) DEFAULT NULL,
  `TTT last date` datetime(6) DEFAULT NULL,
  `tissue` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `patient name2` varchar(40) CHARACTER SET utf8mb4 DEFAULT NULL,
  `age2` tinyint(3) unsigned DEFAULT NULL,
  `gender2` tinyint(3) unsigned DEFAULT NULL,
  `Referring doctor2` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `registerar` varchar(15) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `flow_log_box`
--

DROP TABLE IF EXISTS `flow_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flow_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  `out_time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=2942 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `flow_security`
--

DROP TABLE IF EXISTS `flow_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flow_security` (
  `كود النموذج` double DEFAULT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `followup`
--

DROP TABLE IF EXISTS `followup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `followup` (
  `Serial` text,
  `Patient code` text,
  `date` text,
  `Disc` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `freezer sites`
--

DROP TABLE IF EXISTS `freezer sites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `freezer sites` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Samp_cod` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Site Let` varchar(2) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Rack No` varchar(2) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Box No` smallint(6) DEFAULT NULL,
  `Tube No` smallint(6) DEFAULT NULL,
  `alliquate` varchar(1) CHARACTER SET utf8mb4 DEFAULT NULL,
  `site code` varchar(11) CHARACTER SET utf8mb4 DEFAULT NULL,
  `sample code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Type` varchar(1) CHARACTER SET utf8mb4 DEFAULT NULL,
  `type_other` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `thaw` tinyint(3) unsigned DEFAULT NULL,
  `date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Rec_date` datetime(6) DEFAULT NULL,
  `Rec_time` datetime(6) DEFAULT NULL,
  `seci_code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=493 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `freezers_type code`
--

DROP TABLE IF EXISTS `freezers_type code`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `freezers_type code` (
  `type code` varchar(1) CHARACTER SET utf8mb4 NOT NULL,
  `type text` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`type code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `gender`
--

DROP TABLE IF EXISTS `gender`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gender` (
  `code` tinyint(3) unsigned DEFAULT NULL,
  `gender text ara` varchar(5) CHARACTER SET utf8mb4 DEFAULT NULL,
  `gender text eng` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `governorates`
--

DROP TABLE IF EXISTS `governorates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `governorates` (
  `code` smallint(6) DEFAULT NULL,
  `governorate_name` varchar(15) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `grad_data`
--

DROP TABLE IF EXISTS `grad_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grad_data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Comp_name` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Job` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Job_place` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Gender` varchar(5) CHARACTER SET utf8mb4 DEFAULT NULL,
  `DOB` datetime(6) DEFAULT NULL,
  `Birth_Place` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Address` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `PID` varchar(14) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Contact` varchar(125) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Photo` longblob,
  `Graduation_Univ` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Graduation_Faculty` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Graduation_Dept` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Graduation_Year` int(11) DEFAULT NULL,
  `Graduation_Univ2` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Graduation_Faculty2` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Graduation_Dept2` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Graduation_Year2` int(11) DEFAULT NULL,
  `Graduation_Univ3` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Graduation_Faculty3` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Graduation_Dept3` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Graduation_Year3` int(11) DEFAULT NULL,
  `Reg_degree` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Reg_place` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Reg_date` datetime(6) DEFAULT NULL,
  `First_part_date` datetime(6) DEFAULT NULL,
  `First_part_degree` varchar(15) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Second_part_date` datetime(6) DEFAULT NULL,
  `Second_part_degree` varchar(15) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Thesis_date` datetime(6) DEFAULT NULL,
  `Thesis_add_Eng` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Thesis_add_ar` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Thesis_supervisors` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Thesis_evaluators` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Discussion_date` datetime(6) DEFAULT NULL,
  `Degree_date` datetime(6) DEFAULT NULL,
  `Current_job` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Current_job_date` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `grad_log_box`
--

DROP TABLE IF EXISTS `grad_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grad_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  `out_time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=335 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `grad_security`
--

DROP TABLE IF EXISTS `grad_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grad_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `grade`
--

DROP TABLE IF EXISTS `grade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grade` (
  `Value` tinyint(3) unsigned NOT NULL,
  `Label` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `icu_back drug order details`
--

DROP TABLE IF EXISTS `icu_back drug order details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icu_back drug order details` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Serial` int(11) DEFAULT NULL,
  `drug id` smallint(6) DEFAULT NULL,
  `amount disp` int(11) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=8067 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `icu_back drug orders data`
--

DROP TABLE IF EXISTS `icu_back drug orders data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icu_back drug orders data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Date` datetime(6) DEFAULT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Order number` tinyint(3) unsigned DEFAULT NULL,
  `Dept` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=1464 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `icu_beds`
--

DROP TABLE IF EXISTS `icu_beds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icu_beds` (
  `Bed code` varchar(3) CHARACTER SET utf8mb4 NOT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `pending discharge` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Bed code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `icu_current diet`
--

DROP TABLE IF EXISTS `icu_current diet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icu_current diet` (
  `patient_code` varchar(8) CHARACTER SET utf8mb4 NOT NULL,
  `current_diet` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`patient_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `icu_drug order details`
--

DROP TABLE IF EXISTS `icu_drug order details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icu_drug order details` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Serial` int(11) DEFAULT NULL,
  `drug id` smallint(6) DEFAULT NULL,
  `dose` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `internal pharmacy` smallint(6) DEFAULT NULL,
  `amount disp` int(11) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=133495 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `icu_drug orders data`
--

DROP TABLE IF EXISTS `icu_drug orders data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icu_drug orders data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Date` datetime(6) DEFAULT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Order number` tinyint(3) unsigned DEFAULT NULL,
  `Dept` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=14507 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `icu_log_box`
--

DROP TABLE IF EXISTS `icu_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icu_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  `out_Time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=3655 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `icu_order details`
--

DROP TABLE IF EXISTS `icu_order details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icu_order details` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Serial` int(11) DEFAULT NULL,
  `Order` smallint(6) DEFAULT NULL,
  `Results date` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=6345 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `icu_orders data`
--

DROP TABLE IF EXISTS `icu_orders data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icu_orders data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Date` datetime(6) DEFAULT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=2400 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `icu_security`
--

DROP TABLE IF EXISTS `icu_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icu_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `images_data`
--

DROP TABLE IF EXISTS `images_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images_data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `PID` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Type` tinyint(3) unsigned DEFAULT NULL,
  `link` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `link2` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=1805 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `images_pass`
--

DROP TABLE IF EXISTS `images_pass`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images_pass` (
  `Serial` int(11) NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `images_types`
--

DROP TABLE IF EXISTS `images_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images_types` (
  `Code` tinyint(3) unsigned NOT NULL,
  `Text` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `code` int(11) DEFAULT NULL,
  `job_name` varchar(15) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab1_bleeding_profile`
--

DROP TABLE IF EXISTS `lab1_bleeding_profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab1_bleeding_profile` (
  `Serial` int(11) DEFAULT NULL,
  `patient_code` text,
  `Header` text,
  `Lab_number` int(11) DEFAULT NULL,
  `Specimen_date` text,
  `Specimen` text,
  `Report_date` text,
  `row5` double DEFAULT NULL,
  `unit5` text,
  `n_row5` text,
  `row6` int(11) DEFAULT NULL,
  `unit6` text,
  `n_row6` text,
  `row7` double DEFAULT NULL,
  `unit7` text,
  `n_row7` text,
  `row8` double DEFAULT NULL,
  `unit8` text,
  `n_row8` text,
  `NB` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab1_bleeding_profile_norms`
--

DROP TABLE IF EXISTS `lab1_bleeding_profile_norms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab1_bleeding_profile_norms` (
  `Category` double DEFAULT NULL,
  `nrow5` text,
  `nrow6` text,
  `nrow7` text,
  `nrow8` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab1_cbc`
--

DROP TABLE IF EXISTS `lab1_cbc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab1_cbc` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `patient_code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Header` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Lab_number` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Specimen_date` date DEFAULT NULL,
  `Report_date` date DEFAULT NULL,
  `Specimen` varchar(1) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row1` double DEFAULT NULL,
  `unit1` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n_row1` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row2` double DEFAULT NULL,
  `unit2` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n_row2` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row3` double DEFAULT NULL,
  `unit3` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n_row3` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row4` double DEFAULT NULL,
  `unit4` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n_row4` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row5` double DEFAULT NULL,
  `unit5` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n_row5` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row6` double DEFAULT NULL,
  `unit6` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n_row6` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row7` double DEFAULT NULL,
  `unit7` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n_row7` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row8` double DEFAULT NULL,
  `unit8` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n_row8` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row9` double DEFAULT NULL,
  `unit9` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n_row9` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row10` double DEFAULT NULL,
  `unit10` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n_row10` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row11` double DEFAULT NULL,
  `unit11` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n_row11` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row12` double DEFAULT NULL,
  `unit12` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n_row12` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row13` double DEFAULT NULL,
  `unit13` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n_row13` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row14` double DEFAULT NULL,
  `unit14` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n_row14` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row15` double DEFAULT NULL,
  `unit15` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n_row15` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row16` double DEFAULT NULL,
  `unit16` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n_row16` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row17` double DEFAULT NULL,
  `unit17` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n_row17` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row18` double DEFAULT NULL,
  `unit18` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n_row18` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row19` double DEFAULT NULL,
  `unit19` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n_row19` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row20` double DEFAULT NULL,
  `unit20` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n_row20` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row21` double DEFAULT NULL,
  `unit21` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n_row21` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row22` double DEFAULT NULL,
  `unit22` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n_row22` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `NB` longtext,
  `Comment1` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Comment2` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Comment3` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Comment4` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Comment5` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Comment6` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Comment7` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Comment8` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Comment9` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Comment10` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Comment11` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Comment12` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Comment4a` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Comment8a` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Comment12a` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Comment4b` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Comment8b` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Comment12b` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Comment4c` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Comment8c` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Comment12c` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=305853 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab1_cbc_norms`
--

DROP TABLE IF EXISTS `lab1_cbc_norms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab1_cbc_norms` (
  `Category` double DEFAULT NULL,
  `nrow1` text,
  `nrow2` text,
  `nrow3` text,
  `nrow4` text,
  `nrow5` text,
  `nrow6` text,
  `nrow7` text,
  `nrow8` text,
  `nrow9` text,
  `nrow10` text,
  `nrow11` text,
  `nrow12` text,
  `nrow13` text,
  `nrow14` text,
  `nrow15` text,
  `nrow16` text,
  `nrow17` text,
  `nrow18` text,
  `nrow19` text,
  `nrow20` text,
  `nrow21` text,
  `nrow22` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab1_cs`
--

DROP TABLE IF EXISTS `lab1_cs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab1_cs` (
  `Serial` int(11) DEFAULT NULL,
  `patient_code` text,
  `Header` text,
  `Lab_number` text,
  `Specimen_date` text,
  `Report_date` text,
  `Specimen` text,
  `Organism` text,
  `No_Growth` text,
  `row1a` text,
  `row1b` text,
  `row2a` text,
  `row2b` text,
  `row3a` text,
  `row3b` text,
  `row4a` text,
  `row4b` text,
  `row5a` text,
  `row5b` text,
  `row6a` text,
  `row6b` text,
  `row7a` text,
  `row7b` text,
  `row8a` text,
  `row8b` text,
  `row9a` text,
  `row9b` text,
  `row10a` text,
  `row10b` text,
  `row11a` text,
  `row11b` text,
  `row12a` text,
  `row12b` text,
  `row13a` text,
  `row13b` text,
  `row14a` text,
  `row14b` text,
  `row15a` text,
  `row15b` text,
  `row16a` text,
  `row16b` text,
  `row17a` text,
  `row17b` text,
  `row18a` text,
  `row18b` text,
  `row19a` text,
  `row19b` text,
  `row20a` text,
  `row20b` text,
  `row21a` text,
  `row21b` text,
  `row22a` text,
  `row22b` text,
  `row23a` text,
  `row23b` text,
  `NB` text,
  `row31a` text,
  `row31b` text,
  `row32a` text,
  `row32b` text,
  `row33a` text,
  `row33b` text,
  `row34a` text,
  `row34b` text,
  `row35a` text,
  `row35b` text,
  `row36a` text,
  `row36b` text,
  `row37a` text,
  `row37b` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab1_csf`
--

DROP TABLE IF EXISTS `lab1_csf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab1_csf` (
  `Serial` int(11) DEFAULT NULL,
  `patient_code` text,
  `Header` text,
  `Lab_number` text,
  `Specimen_date` text,
  `Report_date` text,
  `Specimen` text,
  `row1` text,
  `row2` text,
  `row3` text,
  `row4` text,
  `row5` text,
  `row6` text,
  `row7` text,
  `row8` text,
  `row9` text,
  `NB` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab1_esr`
--

DROP TABLE IF EXISTS `lab1_esr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab1_esr` (
  `Serial` int(11) DEFAULT NULL,
  `patient_code` text,
  `Header` text,
  `Lab_number` text,
  `Specimen_date` text,
  `Report_date` text,
  `row1` double DEFAULT NULL,
  `unit1` text,
  `n_row1` text,
  `row2` double DEFAULT NULL,
  `unit2` text,
  `n_row2` text,
  `NB` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab1_esr norms`
--

DROP TABLE IF EXISTS `lab1_esr norms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab1_esr norms` (
  `Category` double NOT NULL,
  `nrow1` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow2` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab1_immunology`
--

DROP TABLE IF EXISTS `lab1_immunology`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab1_immunology` (
  `Serial` int(11) DEFAULT NULL,
  `patient_code` text,
  `Header` text,
  `Lab_number` text,
  `Specimen_date` text,
  `Report_date` text,
  `Specimen` text,
  `row1` double DEFAULT NULL,
  `unit1` text,
  `n_row1` text,
  `row2` double DEFAULT NULL,
  `unit2` text,
  `n_row2` text,
  `row3` double DEFAULT NULL,
  `unit3` text,
  `n_row3` text,
  `NB` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab1_immunology norms`
--

DROP TABLE IF EXISTS `lab1_immunology norms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab1_immunology norms` (
  `Category` double NOT NULL,
  `nrow1` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow2` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow3` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab1_immunology_norms`
--

DROP TABLE IF EXISTS `lab1_immunology_norms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab1_immunology_norms` (
  `Category` double DEFAULT NULL,
  `nrow1` text,
  `nrow2` text,
  `nrow3` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab1_prothrombin`
--

DROP TABLE IF EXISTS `lab1_prothrombin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab1_prothrombin` (
  `Serial` int(11) DEFAULT NULL,
  `patient_code` text,
  `Header` text,
  `Lab_number` text,
  `Specimen_date` text,
  `Report_date` text,
  `Specimen` text,
  `row1` double DEFAULT NULL,
  `unit1` text,
  `row2` double DEFAULT NULL,
  `unit2` text,
  `row3` double DEFAULT NULL,
  `unit3` text,
  `row4` double DEFAULT NULL,
  `unit4` text,
  `row5` double DEFAULT NULL,
  `unit5` text,
  `row6` double DEFAULT NULL,
  `unit6` text,
  `row7` double DEFAULT NULL,
  `unit7` text,
  `row8` double DEFAULT NULL,
  `unit8` text,
  `NB` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab1_prothrombin_normals`
--

DROP TABLE IF EXISTS `lab1_prothrombin_normals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab1_prothrombin_normals` (
  `Category` double DEFAULT NULL,
  `nrow1` text,
  `nrow2` text,
  `nrow3` text,
  `nrow4` text,
  `nrow5` text,
  `nrow6` text,
  `nrow7` text,
  `nrow8` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab1_stool`
--

DROP TABLE IF EXISTS `lab1_stool`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab1_stool` (
  `Serial` int(11) DEFAULT NULL,
  `patient_code` text,
  `Header` text,
  `Lab_number` text,
  `Specimen_date` text,
  `Report_date` text,
  `Specimen` text,
  `row1` text,
  `row2` text,
  `row3` text,
  `row4` text,
  `row5` text,
  `row6` text,
  `row7` text,
  `row8` text,
  `row9` text,
  `row10` text,
  `row11` text,
  `NB` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab1_urinalysis`
--

DROP TABLE IF EXISTS `lab1_urinalysis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab1_urinalysis` (
  `Serial` int(11) DEFAULT NULL,
  `patient_code` text,
  `Header` text,
  `Lab_number` text,
  `Specimen_date` text,
  `Report_date` text,
  `Specimen` text,
  `row1` text,
  `row2` text,
  `row3` int(11) DEFAULT NULL,
  `row4` int(11) DEFAULT NULL,
  `row5` text,
  `row6` text,
  `row7` text,
  `row8` text,
  `row9` text,
  `row10` text,
  `row11` text,
  `row12` text,
  `row13` text,
  `row14` text,
  `row15` text,
  `row16` text,
  `row17` text,
  `row18` text,
  `row19` text,
  `row20` text,
  `row21` text,
  `NB` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab2_bence`
--

DROP TABLE IF EXISTS `lab2_bence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab2_bence` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Header` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Lab number` varchar(5) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Specimen date` datetime(6) DEFAULT NULL,
  `Report date` datetime(6) DEFAULT NULL,
  `Specimen` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row1` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `NB` longtext,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=274 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab2_bence norms`
--

DROP TABLE IF EXISTS `lab2_bence norms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab2_bence norms` (
  `Category` double NOT NULL,
  `nrow1` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab2_bhcg`
--

DROP TABLE IF EXISTS `lab2_bhcg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab2_bhcg` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Header` varchar(6) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Lab number` varchar(5) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Specimen date` datetime(6) DEFAULT NULL,
  `Report date` datetime(6) DEFAULT NULL,
  `Specimen` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row1` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `unit1` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row1` longtext,
  `NB` longtext,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=281 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab2_bhcg norms`
--

DROP TABLE IF EXISTS `lab2_bhcg norms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab2_bhcg norms` (
  `Category` double NOT NULL,
  `nrow1` longtext,
  PRIMARY KEY (`Category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab2_hormones`
--

DROP TABLE IF EXISTS `lab2_hormones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab2_hormones` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Header` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Lab number` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Specimen date` datetime(6) DEFAULT NULL,
  `Report date` datetime(6) DEFAULT NULL,
  `Specimen` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row1` double DEFAULT NULL,
  `unit1` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row1` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row2` double DEFAULT NULL,
  `unit2` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row2` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row3` double DEFAULT NULL,
  `unit3` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row3` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row4` double DEFAULT NULL,
  `unit4` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row4` varchar(70) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row5` double DEFAULT NULL,
  `unit5` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row5` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row6` double DEFAULT NULL,
  `unit6` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row6` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row7` double DEFAULT NULL,
  `unit7` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row7` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row8` double DEFAULT NULL,
  `unit8` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row8` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row9` double DEFAULT NULL,
  `unit9` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row9` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row10` double DEFAULT NULL,
  `unit10` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row10` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row11` double DEFAULT NULL,
  `unit11` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row11` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row12` double DEFAULT NULL,
  `unit12` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row12` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `NB` longtext,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=3895 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab2_hormones norms`
--

DROP TABLE IF EXISTS `lab2_hormones norms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab2_hormones norms` (
  `Category` double NOT NULL,
  `nrow1` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow2` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow3` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow4` varchar(60) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow5` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow6` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow7` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow8` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow9` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow10` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow11` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow12` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab2_markers`
--

DROP TABLE IF EXISTS `lab2_markers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab2_markers` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Header` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Lab number` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Specimen date` datetime(6) DEFAULT NULL,
  `Report date` datetime(6) DEFAULT NULL,
  `Specimen` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row1` double DEFAULT NULL,
  `unit1` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row1` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row2` double DEFAULT NULL,
  `unit2` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row2` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row3` double DEFAULT NULL,
  `unit3` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row3` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row4` double DEFAULT NULL,
  `unit4` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row4` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row5` double DEFAULT NULL,
  `unit5` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row5` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row6` double DEFAULT NULL,
  `unit6` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row6` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row7` double DEFAULT NULL,
  `unit7` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row7` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row8` double DEFAULT NULL,
  `unit8` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row8` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row9` double DEFAULT NULL,
  `unit9` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row9` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row10` double DEFAULT NULL,
  `unit10` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row10` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `NB` longtext,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=15276 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab2_markers norms`
--

DROP TABLE IF EXISTS `lab2_markers norms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab2_markers norms` (
  `Category` double NOT NULL,
  `nrow1` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow2` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow3` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow4` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow5` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow6` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow7` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow8` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow9` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow10` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab4_bm`
--

DROP TABLE IF EXISTS `lab4_bm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab4_bm` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Header` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Specimen date` datetime(6) DEFAULT NULL,
  `Report date` datetime(6) DEFAULT NULL,
  `Specimen` varchar(15) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Diagnosis` longtext,
  `Clinical Data` longtext,
  `t1` double DEFAULT NULL,
  `t2` double DEFAULT NULL,
  `t3` double DEFAULT NULL,
  `t4` double DEFAULT NULL,
  `t5` double DEFAULT NULL,
  `t6` double DEFAULT NULL,
  `t7` double DEFAULT NULL,
  `t8` double DEFAULT NULL,
  `t9` double DEFAULT NULL,
  `t11` double DEFAULT NULL,
  `t12` double DEFAULT NULL,
  `t13` double DEFAULT NULL,
  `t14` double DEFAULT NULL,
  `t15` double DEFAULT NULL,
  `t16` double DEFAULT NULL,
  `t17` double DEFAULT NULL,
  `t18` double DEFAULT NULL,
  `t19` double DEFAULT NULL,
  `t21` double DEFAULT NULL,
  `t22` double DEFAULT NULL,
  `row1` double DEFAULT NULL,
  `row3` double DEFAULT NULL,
  `row4` double DEFAULT NULL,
  `row6` double DEFAULT NULL,
  `row7` double DEFAULT NULL,
  `row8` double DEFAULT NULL,
  `row19` double DEFAULT NULL,
  `row21` double DEFAULT NULL,
  `row23` double DEFAULT NULL,
  `Other findings` longtext,
  `Cytochemistry` longtext,
  `row37` longtext,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=11309 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab4_bm biopsy`
--

DROP TABLE IF EXISTS `lab4_bm biopsy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab4_bm biopsy` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Header` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Specimen date` datetime(6) DEFAULT NULL,
  `Report date` datetime(6) DEFAULT NULL,
  `Specimen` varchar(15) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Diagnosis` longtext,
  `Clinical Data` longtext,
  `row1` double DEFAULT NULL,
  `cellularity` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row2` double DEFAULT NULL,
  `row3` double DEFAULT NULL,
  `row7` double DEFAULT NULL,
  `row19` double DEFAULT NULL,
  `row19text` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row21` double DEFAULT NULL,
  `row23` double DEFAULT NULL,
  `fibrosis` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row24` tinyint(3) unsigned DEFAULT NULL,
  `Other findings` longtext,
  `Special stains` longtext,
  `row37` longtext,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab4_bm norms`
--

DROP TABLE IF EXISTS `lab4_bm norms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab4_bm norms` (
  `Category` double NOT NULL,
  `nrow1` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow2` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow3` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow4` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow5` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow6` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow7` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow8` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow10` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow26` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow27` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow28` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow32` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow35` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow38` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow19` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow21` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow23` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab4_log_box`
--

DROP TABLE IF EXISTS `lab4_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab4_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=4899 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab4_security`
--

DROP TABLE IF EXISTS `lab4_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab4_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab_chemistry`
--

DROP TABLE IF EXISTS `lab_chemistry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab_chemistry` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Header` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Lab number` varchar(5) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Specimen date` datetime(6) DEFAULT NULL,
  `Specimen time` datetime(6) DEFAULT NULL,
  `Report date` datetime(6) DEFAULT NULL,
  `Report time` datetime(6) DEFAULT NULL,
  `Specimen` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Dept` smallint(6) DEFAULT NULL,
  `Equip1` smallint(6) DEFAULT NULL,
  `Equip1b` smallint(6) DEFAULT NULL,
  `Equip2` smallint(6) DEFAULT NULL,
  `Equip3` smallint(6) DEFAULT NULL,
  `Equip4` smallint(6) DEFAULT NULL,
  `row1` double DEFAULT NULL,
  `unit1` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row1` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row2` double DEFAULT NULL,
  `unit2` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row2` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row3` double DEFAULT NULL,
  `unit3` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row3` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row4` double DEFAULT NULL,
  `unit4` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row4` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row5` double DEFAULT NULL,
  `unit5` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row5` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row6` double DEFAULT NULL,
  `unit6` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row6` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row7` double DEFAULT NULL,
  `unit7` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row7` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row8` double DEFAULT NULL,
  `unit8` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row8` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row9` double DEFAULT NULL,
  `unit9` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row9` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row10` double DEFAULT NULL,
  `unit10` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row10` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row11` double DEFAULT NULL,
  `unit11` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row11` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row12` double DEFAULT NULL,
  `unit12` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row12` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row13` double DEFAULT NULL,
  `unit13` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row13` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row14` double DEFAULT NULL,
  `unit14` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row14` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row15` double DEFAULT NULL,
  `unit15` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row15` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row16` double DEFAULT NULL,
  `unit16` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row16` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row17` double DEFAULT NULL,
  `unit17` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row17` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row18` double DEFAULT NULL,
  `unit18` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row18` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row19` double DEFAULT NULL,
  `unit19` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row19` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row20` double DEFAULT NULL,
  `unit20` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row20` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row21` double DEFAULT NULL,
  `unit21` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row21` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row22` double DEFAULT NULL,
  `unit22` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row22` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row23` double DEFAULT NULL,
  `unit23` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row23` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row24` double DEFAULT NULL,
  `unit24` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row24` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row25` double DEFAULT NULL,
  `unit25` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row25` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row26` double DEFAULT NULL,
  `unit26` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row26` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row27` double DEFAULT NULL,
  `unit27` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row27` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row28` double DEFAULT NULL,
  `unit28` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row28` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row29` double DEFAULT NULL,
  `unit29` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row29` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row30` double DEFAULT NULL,
  `unit30` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row30` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `NB` longtext,
  `uncert1` double DEFAULT NULL,
  `uncert2` double DEFAULT NULL,
  `uncert3` double DEFAULT NULL,
  `uncert4` double DEFAULT NULL,
  `uncert5` double DEFAULT NULL,
  `uncert6` double DEFAULT NULL,
  `uncert7` double DEFAULT NULL,
  `uncert8` double DEFAULT NULL,
  `uncert9` double DEFAULT NULL,
  `uncert10` double DEFAULT NULL,
  `uncert11` double DEFAULT NULL,
  `uncert12` double DEFAULT NULL,
  `uncert13` double DEFAULT NULL,
  `uncert14` double DEFAULT NULL,
  `uncert15` double DEFAULT NULL,
  `uncert16` double DEFAULT NULL,
  `uncert17` double DEFAULT NULL,
  `uncert18` double DEFAULT NULL,
  `uncert19` double DEFAULT NULL,
  `uncert20` double DEFAULT NULL,
  `uncert21` double DEFAULT NULL,
  `uncert22` double DEFAULT NULL,
  `uncert23` double DEFAULT NULL,
  `uncert24` double DEFAULT NULL,
  `uncert25` double DEFAULT NULL,
  `uncert26` double DEFAULT NULL,
  `uncert27` double DEFAULT NULL,
  `uncert28` double DEFAULT NULL,
  `uncert29` double DEFAULT NULL,
  `uncert30` double DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=301181 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab_chemistry norms`
--

DROP TABLE IF EXISTS `lab_chemistry norms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab_chemistry norms` (
  `Category` double NOT NULL,
  `nrow1` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow2` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow3` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow4` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow5` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow6` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow7` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow8` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow9` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow10` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow11` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow12` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow13` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow14` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow15` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow16` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow17` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow18` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow19` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow20` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow21` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow22` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow23` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow24` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow25` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow26` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow27` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow28` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow29` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow30` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab_chemistry norms2`
--

DROP TABLE IF EXISTS `lab_chemistry norms2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab_chemistry norms2` (
  `Category` double NOT NULL,
  `nrow1` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow2` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow3` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow4` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow5` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow6` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow7` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow8` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow9` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow10` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow11` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow12` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow13` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow14` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow15` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow16` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow17` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow18` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow19` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow20` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow21` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow22` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow23` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow24` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow25` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow26` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow27` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow28` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow29` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow30` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab_creatinine`
--

DROP TABLE IF EXISTS `lab_creatinine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab_creatinine` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Header` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Specimen date` datetime(6) DEFAULT NULL,
  `row1` double DEFAULT NULL,
  `row2` double DEFAULT NULL,
  `row3` double DEFAULT NULL,
  `row4` double DEFAULT NULL,
  `normal` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=2082 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab_departments`
--

DROP TABLE IF EXISTS `lab_departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab_departments` (
  `code` smallint(6) NOT NULL,
  `dept text arab` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab_electrophoresis`
--

DROP TABLE IF EXISTS `lab_electrophoresis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab_electrophoresis` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Header` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Lab number` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Specimen date` datetime(6) DEFAULT NULL,
  `Report date` datetime(6) DEFAULT NULL,
  `Specimen` varchar(1) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row1` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab_log_box`
--

DROP TABLE IF EXISTS `lab_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=58690 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab_prot24h`
--

DROP TABLE IF EXISTS `lab_prot24h`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab_prot24h` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Header` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Lab number` varchar(5) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Specimen date` datetime(6) DEFAULT NULL,
  `Report date` datetime(6) DEFAULT NULL,
  `Specimen` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row1` double DEFAULT NULL,
  `unit1` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row1` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row2` double DEFAULT NULL,
  `unit2` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row2` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row3` double DEFAULT NULL,
  `unit3` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row3` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `row4` double DEFAULT NULL,
  `unit4` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `n-row4` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `NB` longtext,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab_prot24h norms`
--

DROP TABLE IF EXISTS `lab_prot24h norms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab_prot24h norms` (
  `Category` double NOT NULL,
  `nrow1` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow2` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow3` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nrow4` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lab_security`
--

DROP TABLE IF EXISTS `lab_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `laterality`
--

DROP TABLE IF EXISTS `laterality`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `laterality` (
  `code` tinyint(3) unsigned NOT NULL,
  `laterality_name` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `marital status`
--

DROP TABLE IF EXISTS `marital status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marital status` (
  `code` smallint(6) DEFAULT NULL,
  `status` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `men_back drug order details`
--

DROP TABLE IF EXISTS `men_back drug order details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `men_back drug order details` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Serial` int(11) DEFAULT NULL,
  `drug id` smallint(6) DEFAULT NULL,
  `amount disp` int(11) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=99390 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `men_back drug orders data`
--

DROP TABLE IF EXISTS `men_back drug orders data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `men_back drug orders data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Date` datetime(6) DEFAULT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Order number` tinyint(3) unsigned DEFAULT NULL,
  `Dept` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=33974 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `men_beds`
--

DROP TABLE IF EXISTS `men_beds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `men_beds` (
  `Bed code` varchar(3) CHARACTER SET utf8mb4 NOT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `pending discharge` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`Bed code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `men_current diet`
--

DROP TABLE IF EXISTS `men_current diet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `men_current diet` (
  `patient_code` varchar(8) CHARACTER SET utf8mb4 NOT NULL,
  `current_diet` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`patient_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `men_drug order details`
--

DROP TABLE IF EXISTS `men_drug order details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `men_drug order details` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Serial` int(11) DEFAULT NULL,
  `drug id` smallint(6) DEFAULT NULL,
  `dose` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `internal pharmacy` smallint(6) DEFAULT NULL,
  `amount disp` int(11) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=644405 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `men_drug orders data`
--

DROP TABLE IF EXISTS `men_drug orders data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `men_drug orders data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Date` datetime(6) DEFAULT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Order number` tinyint(3) unsigned DEFAULT NULL,
  `Dept` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=145289 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `men_log_box`
--

DROP TABLE IF EXISTS `men_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `men_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  `out_Time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=11277 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `men_order details`
--

DROP TABLE IF EXISTS `men_order details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `men_order details` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Serial` int(11) DEFAULT NULL,
  `Order` smallint(6) DEFAULT NULL,
  `Results date` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=226850 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `men_orders data`
--

DROP TABLE IF EXISTS `men_orders data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `men_orders data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Date` datetime(6) DEFAULT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=104876 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `men_security`
--

DROP TABLE IF EXISTS `men_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `men_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `morphology`
--

DROP TABLE IF EXISTS `morphology`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `morphology` (
  `Code` varchar(6) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Morphology_text` varchar(90) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Uro` tinyint(1) DEFAULT NULL,
  `Pathology` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `nurses operative record`
--

DROP TABLE IF EXISTS `nurses operative record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nurses operative record` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `diag` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Surgeon` tinyint(3) unsigned DEFAULT NULL,
  `Ass1 Surgeon` tinyint(3) unsigned DEFAULT NULL,
  `Ass2 Surgeon` tinyint(3) unsigned DEFAULT NULL,
  `Ass3 Surgeon` tinyint(3) unsigned DEFAULT NULL,
  `Ass4 Surgeon` tinyint(3) unsigned DEFAULT NULL,
  `An` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=7141 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `op_anesthesiologists`
--

DROP TABLE IF EXISTS `op_anesthesiologists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `op_anesthesiologists` (
  `code` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Salary` int(11) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `op_blood product type`
--

DROP TABLE IF EXISTS `op_blood product type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `op_blood product type` (
  `code` tinyint(3) unsigned NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `op_log_box`
--

DROP TABLE IF EXISTS `op_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `op_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  `out_time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=5674 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `op_nurses`
--

DROP TABLE IF EXISTS `op_nurses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `op_nurses` (
  `code` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Salary` int(11) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `op_operative_record`
--

DROP TABLE IF EXISTS `op_operative_record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `op_operative_record` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Patient_code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Topo` varchar(3) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Operation` tinyint(3) unsigned DEFAULT NULL,
  `Operating_room` tinyint(3) unsigned DEFAULT NULL,
  `Pre-op_diag` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `post-op_diag` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Op_category` tinyint(3) unsigned DEFAULT NULL,
  `Op_type` tinyint(3) unsigned DEFAULT NULL,
  `Op_nature` tinyint(3) unsigned DEFAULT NULL,
  `Surgeon` tinyint(3) unsigned DEFAULT NULL,
  `Ass1_Surgeon` tinyint(3) unsigned DEFAULT NULL,
  `Ass2_Surgeon` tinyint(3) unsigned DEFAULT NULL,
  `Ass3_Surgeon` tinyint(3) unsigned DEFAULT NULL,
  `Ass4_Surgeon` tinyint(3) unsigned DEFAULT NULL,
  `Anesth1` tinyint(3) unsigned DEFAULT NULL,
  `Anesth2` tinyint(3) unsigned DEFAULT NULL,
  `Scrub_nurse1` tinyint(3) unsigned DEFAULT NULL,
  `Scrub_nurse2` tinyint(3) unsigned DEFAULT NULL,
  `Circ_nurse1` tinyint(3) unsigned DEFAULT NULL,
  `Circ_nurse2` tinyint(3) unsigned DEFAULT NULL,
  `An-tech1` smallint(6) DEFAULT NULL,
  `An-tech2` smallint(6) DEFAULT NULL,
  `An-tech3` smallint(6) DEFAULT NULL,
  `An-tech4` smallint(6) DEFAULT NULL,
  `An-tech5` smallint(6) DEFAULT NULL,
  `An-tech6` smallint(6) DEFAULT NULL,
  `An-tech7` smallint(6) DEFAULT NULL,
  `An-tech8` smallint(6) DEFAULT NULL,
  `An-tech9` smallint(6) DEFAULT NULL,
  `An_begin` time(6) DEFAULT NULL,
  `An_end` time(6) DEFAULT NULL,
  `Op_begin` datetime(6) DEFAULT NULL,
  `Op_end` datetime(6) DEFAULT NULL,
  `Wound_class` tinyint(3) unsigned DEFAULT NULL,
  `Body_system1` smallint(6) DEFAULT NULL,
  `Body_system2` smallint(6) DEFAULT NULL,
  `Body_system3` smallint(6) DEFAULT NULL,
  `Body_system4` smallint(6) DEFAULT NULL,
  `Body_system5` smallint(6) DEFAULT NULL,
  `Body_system6` smallint(6) DEFAULT NULL,
  `Body_system7` smallint(6) DEFAULT NULL,
  `Body_system8` smallint(6) DEFAULT NULL,
  `Body_system9` smallint(6) DEFAULT NULL,
  `Body_system10` smallint(6) DEFAULT NULL,
  `Body_system11` smallint(6) DEFAULT NULL,
  `Body_system12` smallint(6) DEFAULT NULL,
  `Body_system13` smallint(6) DEFAULT NULL,
  `Body_system14` smallint(6) DEFAULT NULL,
  `Body_system15` smallint(6) DEFAULT NULL,
  `Body_system16` smallint(6) DEFAULT NULL,
  `Body_system17` smallint(6) DEFAULT NULL,
  `Body_system18` smallint(6) DEFAULT NULL,
  `Body_system19` smallint(6) DEFAULT NULL,
  `Blood_type1` tinyint(3) unsigned DEFAULT NULL,
  `Blood_units1` tinyint(3) unsigned DEFAULT NULL,
  `Blood_type2` tinyint(3) unsigned DEFAULT NULL,
  `Blood_units2` tinyint(3) unsigned DEFAULT NULL,
  `Blood_loss` int(11) DEFAULT NULL,
  `Op_procedure_type` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Op_procedure_details` longtext,
  `Intra-op_comp` longtext,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=8365 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `op_security`
--

DROP TABLE IF EXISTS `op_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `op_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `op_surgeons`
--

DROP TABLE IF EXISTS `op_surgeons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `op_surgeons` (
  `code` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Salary` int(11) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `code` tinyint(3) unsigned DEFAULT NULL,
  `text` varchar(35) CHARACTER SET utf8mb4 DEFAULT NULL,
  `text Ar` varchar(35) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Lab` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `out_ttt_back drug order details`
--

DROP TABLE IF EXISTS `out_ttt_back drug order details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `out_ttt_back drug order details` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Serial` int(11) DEFAULT NULL,
  `drug id` smallint(6) DEFAULT NULL,
  `amount disp` int(11) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `out_ttt_back drug orders data`
--

DROP TABLE IF EXISTS `out_ttt_back drug orders data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `out_ttt_back drug orders data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Date` datetime(6) DEFAULT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Order number` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `out_ttt_chemo back drug order details`
--

DROP TABLE IF EXISTS `out_ttt_chemo back drug order details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `out_ttt_chemo back drug order details` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Serial` int(11) DEFAULT NULL,
  `drug id` smallint(6) DEFAULT NULL,
  `amount disp` int(11) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `out_ttt_chemo back drug orders data`
--

DROP TABLE IF EXISTS `out_ttt_chemo back drug orders data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `out_ttt_chemo back drug orders data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Date` datetime(6) DEFAULT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Order number` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `out_ttt_chemo drug order details`
--

DROP TABLE IF EXISTS `out_ttt_chemo drug order details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `out_ttt_chemo drug order details` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Serial` int(11) DEFAULT NULL,
  `drug id` smallint(6) DEFAULT NULL,
  `dose` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `internal pharmacy` smallint(6) DEFAULT NULL,
  `amount disp` int(11) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=91372 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `out_ttt_chemo drug orders data`
--

DROP TABLE IF EXISTS `out_ttt_chemo drug orders data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `out_ttt_chemo drug orders data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Date` datetime(6) DEFAULT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Order number` tinyint(3) unsigned DEFAULT NULL,
  `Dose No` int(11) DEFAULT NULL,
  `day No` int(11) DEFAULT NULL,
  `Next dose date` datetime(6) DEFAULT NULL,
  `Regimen` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=15560 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `out_ttt_drug order details`
--

DROP TABLE IF EXISTS `out_ttt_drug order details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `out_ttt_drug order details` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Serial` int(11) DEFAULT NULL,
  `drug id` smallint(6) DEFAULT NULL,
  `dose` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `internal pharmacy` smallint(6) DEFAULT NULL,
  `amount disp` int(11) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=59426 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `out_ttt_drug orders data`
--

DROP TABLE IF EXISTS `out_ttt_drug orders data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `out_ttt_drug orders data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Date` datetime(6) DEFAULT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Order number` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=13825 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `out_ttt_log_box`
--

DROP TABLE IF EXISTS `out_ttt_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `out_ttt_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  `out_Time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=6088 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `out_ttt_security`
--

DROP TABLE IF EXISTS `out_ttt_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `out_ttt_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `outpatients_chemo tickets`
--

DROP TABLE IF EXISTS `outpatients_chemo tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `outpatients_chemo tickets` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime(6) DEFAULT NULL,
  `ticket number` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `time of ticket` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=42071 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `outpatients_log_box`
--

DROP TABLE IF EXISTS `outpatients_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `outpatients_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=45240 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `outpatients_security`
--

DROP TABLE IF EXISTS `outpatients_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `outpatients_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `outpatients_tickets`
--

DROP TABLE IF EXISTS `outpatients_tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `outpatients_tickets` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `ticket_number` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `patient_code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `time of ticket` datetime(6) DEFAULT NULL,
  `sheet delivery` binary(1) DEFAULT NULL,
  `time of sheet` datetime(6) DEFAULT NULL,
  `Clinic_number` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=452698 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `outpatients_tickets data`
--

DROP TABLE IF EXISTS `outpatients_tickets data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `outpatients_tickets data` (
  `Serial` int(11) NOT NULL,
  `Cause1` smallint(6) DEFAULT NULL,
  `Cause2` smallint(6) DEFAULT NULL,
  `Cause3` smallint(6) DEFAULT NULL,
  `Cause4` smallint(6) DEFAULT NULL,
  `Cause5` smallint(6) DEFAULT NULL,
  `Cause6` smallint(6) DEFAULT NULL,
  `Xray` smallint(6) DEFAULT NULL,
  `Plain` smallint(6) DEFAULT NULL,
  `Sono` smallint(6) DEFAULT NULL,
  `CAT` smallint(6) DEFAULT NULL,
  `Lab` smallint(6) DEFAULT NULL,
  `haematology` smallint(6) DEFAULT NULL,
  `chemistry` smallint(6) DEFAULT NULL,
  `Serology` smallint(6) DEFAULT NULL,
  `Markers` smallint(6) DEFAULT NULL,
  `Other inv` smallint(6) DEFAULT NULL,
  `Drugs` smallint(6) DEFAULT NULL,
  `Chemotherapy` smallint(6) DEFAULT NULL,
  `Hormonal therapy` smallint(6) DEFAULT NULL,
  `Other durgs` smallint(6) DEFAULT NULL,
  `Admission` smallint(6) DEFAULT NULL,
  `treatment` smallint(6) DEFAULT NULL,
  `Investigations` smallint(6) DEFAULT NULL,
  `Notes` longtext,
  `Diagnosis` longtext,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pathology_diagnosed by`
--

DROP TABLE IF EXISTS `pathology_diagnosed by`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pathology_diagnosed by` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Field1` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pathology_log_box`
--

DROP TABLE IF EXISTS `pathology_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pathology_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  `out_time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=30264 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pathology_report1`
--

DROP TABLE IF EXISTS `pathology_report1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pathology_report1` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `rec_date` datetime(6) DEFAULT NULL,
  `date` datetime(6) DEFAULT NULL,
  `Clin_diag` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `findings` longtext,
  `Conclusion` longtext,
  `Local` smallint(6) DEFAULT NULL,
  `Lab No` varchar(9) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Nature` longtext,
  `Gross` longtext,
  `Histologic` longtext,
  `Immunohisto_tech` longtext,
  `Immunohistochemical` longtext,
  `Diagnosed` varchar(60) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Verbal` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Typist` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `morphology` varchar(6) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Grade` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=14247 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pathology_report2`
--

DROP TABLE IF EXISTS `pathology_report2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pathology_report2` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `rec_date` datetime(6) DEFAULT NULL,
  `date` datetime(6) DEFAULT NULL,
  `Lab No` varchar(9) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Specimen` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL,
  `findings` longtext,
  `Conclusion` longtext,
  `Diagnosed` varchar(60) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Verbal` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Typist` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Local` smallint(6) DEFAULT NULL,
  `Histologic` longtext,
  `Clin_diag` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=5897 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pathology_security`
--

DROP TABLE IF EXISTS `pathology_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pathology_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pathology_typist`
--

DROP TABLE IF EXISTS `pathology_typist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pathology_typist` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Field1` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pathology_verbal`
--

DROP TABLE IF EXISTS `pathology_verbal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pathology_verbal` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Field1` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patients` (
  `patient_code` varchar(8) NOT NULL,
  `patient_name` varchar(60) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `job` int(11) DEFAULT NULL,
  `job_details` varchar(30) DEFAULT NULL,
  `Marital_status` int(11) DEFAULT NULL,
  `governorate` int(11) DEFAULT NULL,
  `district` varchar(20) DEFAULT NULL,
  `village` varchar(50) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `next_of_kin` varchar(200) DEFAULT NULL,
  `birth_date` varchar(30) DEFAULT NULL,
  `age` int(6) DEFAULT NULL,
  `initial_diagnosis` varchar(50) DEFAULT NULL,
  `Topography` varchar(5) DEFAULT NULL,
  `Morphology` varchar(8) DEFAULT NULL,
  `Laterality` int(11) unsigned DEFAULT NULL,
  `Stage` int(11) unsigned DEFAULT NULL,
  `Grade` int(11) unsigned DEFAULT NULL,
  `first visit date` varchar(30) DEFAULT NULL,
  `ID number` varchar(25) DEFAULT NULL,
  `National_ID_number` double DEFAULT NULL,
  `Final_Diagnosis` varchar(150) DEFAULT NULL,
  `Mob` varchar(11) DEFAULT NULL,
  `not malignant` int(11) DEFAULT NULL,
  PRIMARY KEY (`patient_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pdf_data`
--

DROP TABLE IF EXISTS `pdf_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pdf_data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `PID` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Type` tinyint(3) unsigned DEFAULT NULL,
  `file_number` varchar(2) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=22737 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pdf_pass`
--

DROP TABLE IF EXISTS `pdf_pass`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pdf_pass` (
  `Serial` int(11) NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pdf_sheet`
--

DROP TABLE IF EXISTS `pdf_sheet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pdf_sheet` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `PID` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pdf_types`
--

DROP TABLE IF EXISTS `pdf_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pdf_types` (
  `Code` tinyint(3) unsigned NOT NULL,
  `Text` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ped_back drug order details`
--

DROP TABLE IF EXISTS `ped_back drug order details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ped_back drug order details` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Serial` int(11) DEFAULT NULL,
  `drug id` smallint(6) DEFAULT NULL,
  `amount disp` int(11) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=3888 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ped_back drug orders data`
--

DROP TABLE IF EXISTS `ped_back drug orders data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ped_back drug orders data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Date` datetime(6) DEFAULT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Order number` tinyint(3) unsigned DEFAULT NULL,
  `Dept` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=2192 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ped_beds`
--

DROP TABLE IF EXISTS `ped_beds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ped_beds` (
  `Bed code` varchar(3) CHARACTER SET utf8mb4 NOT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `pending discharge` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Bed code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ped_current diet`
--

DROP TABLE IF EXISTS `ped_current diet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ped_current diet` (
  `patient code` varchar(8) CHARACTER SET utf8mb4 NOT NULL,
  `current diet` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`patient code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ped_drug order details`
--

DROP TABLE IF EXISTS `ped_drug order details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ped_drug order details` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Serial` int(11) DEFAULT NULL,
  `drug id` smallint(6) DEFAULT NULL,
  `dose` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `internal pharmacy` smallint(6) DEFAULT NULL,
  `amount disp` int(11) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=476318 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ped_drug orders data`
--

DROP TABLE IF EXISTS `ped_drug orders data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ped_drug orders data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Date` datetime(6) DEFAULT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Order number` tinyint(3) unsigned DEFAULT NULL,
  `Dept` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=97810 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ped_log_box`
--

DROP TABLE IF EXISTS `ped_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ped_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  `out_Time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=12060 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ped_order details`
--

DROP TABLE IF EXISTS `ped_order details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ped_order details` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Serial` int(11) DEFAULT NULL,
  `Order` smallint(6) DEFAULT NULL,
  `Results date` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=102255 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ped_orders data`
--

DROP TABLE IF EXISTS `ped_orders data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ped_orders data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Date` datetime(6) DEFAULT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=60152 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ped_security`
--

DROP TABLE IF EXISTS `ped_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ped_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pharm_dealers`
--

DROP TABLE IF EXISTS `pharm_dealers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pharm_dealers` (
  `Dealer code` tinyint(3) unsigned NOT NULL,
  `Dealer name` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Dealer code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pharm_form`
--

DROP TABLE IF EXISTS `pharm_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pharm_form` (
  `Form code` tinyint(3) unsigned NOT NULL,
  `Form name Ara` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Form name Eng` varchar(35) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Form code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pharm_generic names`
--

DROP TABLE IF EXISTS `pharm_generic names`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pharm_generic names` (
  `Code` int(11) NOT NULL AUTO_INCREMENT,
  `Generic Name Ara` varchar(60) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Form` double DEFAULT NULL,
  `Drug_pharm_code` int(11) DEFAULT NULL,
  `Clin_pharm` smallint(6) DEFAULT NULL,
  `Clin_pharm2` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`Code`)
) ENGINE=InnoDB AUTO_INCREMENT=1207 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pharm_log_box`
--

DROP TABLE IF EXISTS `pharm_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pharm_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pharm_pharmacy`
--

DROP TABLE IF EXISTS `pharm_pharmacy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pharm_pharmacy` (
  `Pharmacy code` tinyint(3) unsigned NOT NULL,
  `Pharmacy name` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Pharmacy code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pharm_seci pharmacy drugs last`
--

DROP TABLE IF EXISTS `pharm_seci pharmacy drugs last`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pharm_seci pharmacy drugs last` (
  `Drug ID` int(11) NOT NULL,
  `Name Eng` varchar(60) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Name Ara` varchar(60) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Form` tinyint(3) unsigned DEFAULT NULL,
  `Conc` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Conc_eng` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Pack` int(11) DEFAULT NULL,
  `Out patient clinic` smallint(6) DEFAULT NULL,
  `Store No` tinyint(3) unsigned DEFAULT NULL,
  `Pay` smallint(6) DEFAULT NULL,
  `OK` smallint(6) DEFAULT NULL,
  `Group` varchar(1) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Price1` double DEFAULT NULL,
  `Price2` double DEFAULT NULL,
  `PDF` longtext,
  `order limit` int(11) DEFAULT NULL,
  PRIMARY KEY (`Drug ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pharm_security`
--

DROP TABLE IF EXISTS `pharm_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pharm_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pharm_starting balance`
--

DROP TABLE IF EXISTS `pharm_starting balance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pharm_starting balance` (
  `Drug ID` int(11) NOT NULL,
  `Pharmacy0` int(11) DEFAULT NULL,
  `Pharmacy1` int(11) DEFAULT NULL,
  `Pharmacy2` int(11) DEFAULT NULL,
  `Pharmacy3` int(11) DEFAULT NULL,
  `Pharmacy4` int(11) DEFAULT NULL,
  `Pharmacy5` int(11) DEFAULT NULL,
  `Pharmacy6` int(11) DEFAULT NULL,
  `Pharmacy7` int(11) DEFAULT NULL,
  `Pharmacy8` int(11) DEFAULT NULL,
  `Pharmacy9` int(11) DEFAULT NULL,
  `Pharmacy10` int(11) DEFAULT NULL,
  `Pharmacy11` int(11) DEFAULT NULL,
  `Pharmacy12` int(11) DEFAULT NULL,
  `Pharmacy13` int(11) DEFAULT NULL,
  `Pharmacy14` int(11) DEFAULT NULL,
  `Pharmacy15` int(11) DEFAULT NULL,
  PRIMARY KEY (`Drug ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pharm_transaction data`
--

DROP TABLE IF EXISTS `pharm_transaction data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pharm_transaction data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Drug ID` int(11) DEFAULT NULL,
  `Notes` longtext,
  `transaction serial` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=575980 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pharm_transactions`
--

DROP TABLE IF EXISTS `pharm_transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pharm_transactions` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime(6) DEFAULT NULL,
  `type` tinyint(3) unsigned DEFAULT NULL,
  `dealer from` int(11) DEFAULT NULL,
  `dealer to` int(11) DEFAULT NULL,
  `Notes` longtext,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=39757 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `priv_back drug order details`
--

DROP TABLE IF EXISTS `priv_back drug order details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `priv_back drug order details` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Serial` int(11) DEFAULT NULL,
  `drug id` smallint(6) DEFAULT NULL,
  `amount disp` int(11) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `priv_back drug orders data`
--

DROP TABLE IF EXISTS `priv_back drug orders data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `priv_back drug orders data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Date` datetime(6) DEFAULT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Order number` tinyint(3) unsigned DEFAULT NULL,
  `Dept` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `priv_beds`
--

DROP TABLE IF EXISTS `priv_beds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `priv_beds` (
  `Bed code` varchar(4) CHARACTER SET utf8mb4 NOT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `pending discharge` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Bed code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `priv_current diet`
--

DROP TABLE IF EXISTS `priv_current diet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `priv_current diet` (
  `patient_code` varchar(8) CHARACTER SET utf8mb4 NOT NULL,
  `current_diet` smallint(6) DEFAULT NULL,
  `Room No` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`patient_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `priv_drug order details`
--

DROP TABLE IF EXISTS `priv_drug order details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `priv_drug order details` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Serial` int(11) DEFAULT NULL,
  `drug id` smallint(6) DEFAULT NULL,
  `dose` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `internal pharmacy` smallint(6) DEFAULT NULL,
  `amount disp` int(11) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `priv_drug orders data`
--

DROP TABLE IF EXISTS `priv_drug orders data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `priv_drug orders data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Date` datetime(6) DEFAULT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Order number` tinyint(3) unsigned DEFAULT NULL,
  `Dept` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `priv_log_box`
--

DROP TABLE IF EXISTS `priv_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `priv_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  `out_Time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=750 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `priv_order details`
--

DROP TABLE IF EXISTS `priv_order details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `priv_order details` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Serial` int(11) DEFAULT NULL,
  `Order` smallint(6) DEFAULT NULL,
  `Results date` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=8766 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `priv_orders data`
--

DROP TABLE IF EXISTS `priv_orders data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `priv_orders data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Date` datetime(6) DEFAULT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=4229 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `priv_security`
--

DROP TABLE IF EXISTS `priv_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `priv_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `progress`
--

DROP TABLE IF EXISTS `progress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `progress` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Date` datetime(6) DEFAULT NULL,
  `Disc` longtext,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `radio_ct-1`
--

DROP TABLE IF EXISTS `radio_ct-1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `radio_ct-1` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `date` datetime(6) DEFAULT NULL,
  `Procedure name` longtext,
  `Procedure explanation` longtext,
  `Morphology` longtext,
  `Conclusion` longtext,
  `Signature` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Revision` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Staff` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Link` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=17302 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `radio_ct-2`
--

DROP TABLE IF EXISTS `radio_ct-2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `radio_ct-2` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `date` datetime(6) DEFAULT NULL,
  `Procedure name` longtext,
  `Procedure explanation` longtext,
  `Morphology` longtext,
  `Conclusion` longtext,
  `Signature` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Revision` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Staff` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Link` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=1611 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `radio_ct-3`
--

DROP TABLE IF EXISTS `radio_ct-3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `radio_ct-3` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `date` datetime(6) DEFAULT NULL,
  `Procedure name` longtext,
  `Procedure explanation` longtext,
  `Morphology` longtext,
  `Conclusion` longtext,
  `Signature` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Revision` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Staff` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Link` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=5072 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `radio_ct-4`
--

DROP TABLE IF EXISTS `radio_ct-4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `radio_ct-4` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `date` datetime(6) DEFAULT NULL,
  `Procedure name` longtext,
  `Procedure explanation` longtext,
  `Morphology` longtext,
  `Conclusion` longtext,
  `Signature` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Revision` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Staff` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Link` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=1564 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `radio_ct-5`
--

DROP TABLE IF EXISTS `radio_ct-5`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `radio_ct-5` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `date` datetime(6) DEFAULT NULL,
  `Procedure name` longtext,
  `Procedure explanation` longtext,
  `Morphology` longtext,
  `Conclusion` longtext,
  `Signature` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Revision` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Staff` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Link` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=1542 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `radio_doctors`
--

DROP TABLE IF EXISTS `radio_doctors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `radio_doctors` (
  `Code` int(11) NOT NULL,
  `Name` varchar(35) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `radio_log_box`
--

DROP TABLE IF EXISTS `radio_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `radio_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  `out_time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=17737 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `radio_mamo-1`
--

DROP TABLE IF EXISTS `radio_mamo-1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `radio_mamo-1` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `date` datetime(6) DEFAULT NULL,
  `Procedure name` longtext,
  `Procedure explanation` longtext,
  `Morphology` longtext,
  `Conclusion` longtext,
  `Signature` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Revision` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Staff` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Link` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `radio_mamo-2`
--

DROP TABLE IF EXISTS `radio_mamo-2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `radio_mamo-2` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `date` datetime(6) DEFAULT NULL,
  `Procedure name` longtext,
  `Procedure explanation` longtext,
  `Morphology` longtext,
  `Conclusion` longtext,
  `Signature` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Revision` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Staff` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Link` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=4894 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `radio_normals`
--

DROP TABLE IF EXISTS `radio_normals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `radio_normals` (
  `Serial` int(11) NOT NULL,
  `Procedure name` longtext,
  `Procedure explanation` longtext,
  `Morphology` longtext,
  `Conclusion` longtext,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `radio_plain`
--

DROP TABLE IF EXISTS `radio_plain`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `radio_plain` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Procedure_no` int(11) DEFAULT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `date` datetime(6) DEFAULT NULL,
  `Procedure name` longtext,
  `Procedure explanation` longtext,
  `Morphology` longtext,
  `Conclusion` longtext,
  `Signature` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Revision` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Staff` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Link` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=1166 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `radio_revision`
--

DROP TABLE IF EXISTS `radio_revision`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `radio_revision` (
  `Code` int(11) NOT NULL,
  `Name` varchar(35) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `radio_security`
--

DROP TABLE IF EXISTS `radio_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `radio_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `radio_staff`
--

DROP TABLE IF EXISTS `radio_staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `radio_staff` (
  `Code` int(11) NOT NULL,
  `Name` varchar(35) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `radio_us-1`
--

DROP TABLE IF EXISTS `radio_us-1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `radio_us-1` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `date` datetime(6) DEFAULT NULL,
  `Procedure name` longtext,
  `Report` longtext,
  `Impression` longtext,
  `Signature` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Revision` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Staff` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Link` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=56459 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `radio_us-2`
--

DROP TABLE IF EXISTS `radio_us-2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `radio_us-2` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `date` datetime(6) DEFAULT NULL,
  `Procedure name` longtext,
  `Report` longtext,
  `Impression` longtext,
  `Signature` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Revision` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Staff` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Link` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=1493 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `radio_us-3`
--

DROP TABLE IF EXISTS `radio_us-3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `radio_us-3` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `date` datetime(6) DEFAULT NULL,
  `Procedure name` longtext,
  `Report` longtext,
  `Impression` longtext,
  `Signature` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Revision` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Staff` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Link` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=428 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `radio_us-4`
--

DROP TABLE IF EXISTS `radio_us-4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `radio_us-4` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `date` datetime(6) DEFAULT NULL,
  `Procedure name` longtext,
  `Report` longtext,
  `Impression` longtext,
  `Signature` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Revision` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Staff` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Link` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=4735 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `radio_us-5`
--

DROP TABLE IF EXISTS `radio_us-5`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `radio_us-5` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `date` datetime(6) DEFAULT NULL,
  `Procedure name` longtext,
  `Report` longtext,
  `Impression` longtext,
  `Signature` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Revision` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Staff` varchar(75) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Link` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=1008 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `relationship`
--

DROP TABLE IF EXISTS `relationship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `relationship` (
  `code` int(11) NOT NULL,
  `text` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `report_log_box`
--

DROP TABLE IF EXISTS `report_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `report_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  `out_time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=17324 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `report_security`
--

DROP TABLE IF EXISTS `report_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `report_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `reports_data`
--

DROP TABLE IF EXISTS `reports_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reports_data` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `PID` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `date` datetime(6) DEFAULT NULL,
  `file_number` int(11) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=532 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `reports_log_box`
--

DROP TABLE IF EXISTS `reports_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reports_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  `out_time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=163 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `reports_pass`
--

DROP TABLE IF EXISTS `reports_pass`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reports_pass` (
  `serial` int(11) NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `reports_security`
--

DROP TABLE IF EXISTS `reports_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reports_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `rth_log_box`
--

DROP TABLE IF EXISTS `rth_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rth_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  `out_time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `rth_radiotherapy`
--

DROP TABLE IF EXISTS `rth_radiotherapy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rth_radiotherapy` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `session` tinyint(3) unsigned DEFAULT NULL,
  `intent` tinyint(3) unsigned DEFAULT NULL,
  `energy` tinyint(3) unsigned DEFAULT NULL,
  `total_dose` double DEFAULT NULL,
  `Fract_no` smallint(6) DEFAULT NULL,
  `Period` smallint(6) DEFAULT NULL,
  `Technique` tinyint(3) unsigned DEFAULT NULL,
  `Field` tinyint(3) unsigned DEFAULT NULL,
  `Rth_start` datetime(6) DEFAULT NULL,
  `Rth_end` datetime(6) DEFAULT NULL,
  `interr` tinyint(3) unsigned DEFAULT NULL,
  `interr_period` smallint(6) DEFAULT NULL,
  `interr_cause` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `rth_security`
--

DROP TABLE IF EXISTS `rth_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rth_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sig1_advance`
--

DROP TABLE IF EXISTS `sig1_advance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sig1_advance` (
  `Serial` int(11) NOT NULL,
  `advance` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sig1_arrivals`
--

DROP TABLE IF EXISTS `sig1_arrivals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sig1_arrivals` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Emp_ID` int(11) DEFAULT NULL,
  `Date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Comp_no` int(11) DEFAULT NULL,
  `valid` smallint(6) DEFAULT NULL,
  `err` int(11) DEFAULT NULL,
  `delay` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sig1_departures`
--

DROP TABLE IF EXISTS `sig1_departures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sig1_departures` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Emp_ID` int(11) DEFAULT NULL,
  `Date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Comp_no` tinyint(3) unsigned DEFAULT NULL,
  `valid` smallint(6) DEFAULT NULL,
  `err` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sig1_depts`
--

DROP TABLE IF EXISTS `sig1_depts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sig1_depts` (
  `Dept_ID` int(11) NOT NULL,
  `Dept_name` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Dept_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sig1_employees`
--

DROP TABLE IF EXISTS `sig1_employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sig1_employees` (
  `ID` int(11) NOT NULL,
  `Suffix` varchar(5) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Name` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Photo` longblob,
  `Category` tinyint(3) unsigned DEFAULT NULL,
  `Fingerprint_rt` int(11) DEFAULT NULL,
  `Fingerprint_rt2` int(11) DEFAULT NULL,
  `Fingerprint_rt3` int(11) DEFAULT NULL,
  `Fingerprint_rt4` int(11) DEFAULT NULL,
  `Fingerprint_rt5` int(11) DEFAULT NULL,
  `Fingerprint_lt` int(11) DEFAULT NULL,
  `Fingerprint_lt2` int(11) DEFAULT NULL,
  `Fingerprint_lt3` int(11) DEFAULT NULL,
  `Fingerprint_lt4` int(11) DEFAULT NULL,
  `Fingerprint_lt5` int(11) DEFAULT NULL,
  `Dept` int(11) DEFAULT NULL,
  `Arr_time` datetime(6) DEFAULT NULL,
  `Dept_time` datetime(6) DEFAULT NULL,
  `Sign` smallint(6) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `Arr_time1` datetime(6) DEFAULT NULL,
  `Dept_time1` datetime(6) DEFAULT NULL,
  `Sign1` smallint(6) DEFAULT NULL,
  `Arr_time2` datetime(6) DEFAULT NULL,
  `Dept_time2` datetime(6) DEFAULT NULL,
  `Sign2` smallint(6) DEFAULT NULL,
  `Arr_time3` datetime(6) DEFAULT NULL,
  `Dept_time3` datetime(6) DEFAULT NULL,
  `Sign3` smallint(6) DEFAULT NULL,
  `Arr_time4` datetime(6) DEFAULT NULL,
  `Dept_time4` datetime(6) DEFAULT NULL,
  `Sign4` smallint(6) DEFAULT NULL,
  `Arr_time5` datetime(6) DEFAULT NULL,
  `Dept_time5` datetime(6) DEFAULT NULL,
  `Sign5` smallint(6) DEFAULT NULL,
  `Arr_time6` datetime(6) DEFAULT NULL,
  `Dept_time6` datetime(6) DEFAULT NULL,
  `Sign6` smallint(6) DEFAULT NULL,
  `Arr_time7` datetime(6) DEFAULT NULL,
  `Dept_time7` datetime(6) DEFAULT NULL,
  `Sign7` smallint(6) DEFAULT NULL,
  `Temporary` smallint(6) DEFAULT NULL,
  `Old building` smallint(6) DEFAULT NULL,
  `Contract` smallint(6) DEFAULT NULL,
  `Arr_time_nobatgia` datetime(6) DEFAULT NULL,
  `Dept_time_nobatgia` datetime(6) DEFAULT NULL,
  `Arr_time_Sahar` datetime(6) DEFAULT NULL,
  `Dept_time_Sahar` datetime(6) DEFAULT NULL,
  `IT_Sign` smallint(6) DEFAULT NULL,
  `admin_sign` smallint(6) DEFAULT NULL,
  `Institute` smallint(6) DEFAULT NULL,
  `Gamiah` smallint(6) DEFAULT NULL,
  `Card` smallint(6) DEFAULT NULL,
  `face` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sig1_log_box`
--

DROP TABLE IF EXISTS `sig1_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sig1_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  `out_time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=14532 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sig1_security`
--

DROP TABLE IF EXISTS `sig1_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sig1_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sig1_vacation types`
--

DROP TABLE IF EXISTS `sig1_vacation types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sig1_vacation types` (
  `Vac ID` int(11) NOT NULL,
  `Vac text` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Vac ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sig1_vacations`
--

DROP TABLE IF EXISTS `sig1_vacations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sig1_vacations` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Employee` int(11) DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Type` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=7984 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sig2_depts`
--

DROP TABLE IF EXISTS `sig2_depts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sig2_depts` (
  `Dept_id` int(11) NOT NULL,
  `Dept_name` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sig_time`
--

DROP TABLE IF EXISTS `sig_time`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sig_time` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Comp number` int(11) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=1012 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `topography`
--

DROP TABLE IF EXISTS `topography`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topography` (
  `Code` varchar(5) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Topography_text_Eng` varchar(80) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Topography text AR` varchar(80) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_type`
--

DROP TABLE IF EXISTS `user_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_type` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `Text` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) DEFAULT NULL,
  `Username` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `type` int(3) DEFAULT NULL,
  `Salary` int(11) DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  PRIMARY KEY (`Serial`),
  UNIQUE KEY `Username_UNIQUE` (`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=5589 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `wards`
--

DROP TABLE IF EXISTS `wards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wards` (
  `Ward_code` tinyint(3) unsigned NOT NULL,
  `Ward_text` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Beds` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Ward_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `wards_for_labels`
--

DROP TABLE IF EXISTS `wards_for_labels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wards_for_labels` (
  `Ward_code` tinyint(3) unsigned NOT NULL,
  `Ward_text` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Ward_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `women_back drug order details`
--

DROP TABLE IF EXISTS `women_back drug order details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `women_back drug order details` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Serial` int(11) DEFAULT NULL,
  `drug id` smallint(6) DEFAULT NULL,
  `amount disp` int(11) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=116687 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `women_back drug orders data`
--

DROP TABLE IF EXISTS `women_back drug orders data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `women_back drug orders data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Date` datetime(6) DEFAULT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Order number` tinyint(3) unsigned DEFAULT NULL,
  `Dept` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=32394 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `women_beds`
--

DROP TABLE IF EXISTS `women_beds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `women_beds` (
  `Bed code` varchar(3) CHARACTER SET utf8mb4 NOT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `pending discharge` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Bed code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `women_current diet`
--

DROP TABLE IF EXISTS `women_current diet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `women_current diet` (
  `patient_code` varchar(8) CHARACTER SET utf8mb4 NOT NULL,
  `current_diet` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`patient_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `women_drug order details`
--

DROP TABLE IF EXISTS `women_drug order details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `women_drug order details` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Serial` int(11) DEFAULT NULL,
  `drug id` smallint(6) DEFAULT NULL,
  `dose` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `internal pharmacy` smallint(6) DEFAULT NULL,
  `amount disp` int(11) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=794075 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `women_drug orders data`
--

DROP TABLE IF EXISTS `women_drug orders data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `women_drug orders data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Date` datetime(6) DEFAULT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Order number` tinyint(3) unsigned DEFAULT NULL,
  `Dept` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=171194 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `women_log_box`
--

DROP TABLE IF EXISTS `women_log_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `women_log_box` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Used_Password` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Date` datetime(6) DEFAULT NULL,
  `Time` datetime(6) DEFAULT NULL,
  `Comp number` int(11) DEFAULT NULL,
  `out_Time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=19500 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `women_order details`
--

DROP TABLE IF EXISTS `women_order details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `women_order details` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Serial` int(11) DEFAULT NULL,
  `Order` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=243931 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `women_orders data`
--

DROP TABLE IF EXISTS `women_orders data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `women_orders data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Order Date` datetime(6) DEFAULT NULL,
  `Patient code` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=104910 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `women_security`
--

DROP TABLE IF EXISTS `women_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `women_security` (
  `كود النموذج` double NOT NULL,
  `اسم النموذج` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `مستوى الأمان` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping routines for database 'seci'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-31  4:07:58
