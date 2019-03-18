
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
DROP TABLE IF EXISTS `sp_gf_form_meta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_gf_form_meta` (
  `form_id` mediumint(8) unsigned NOT NULL,
  `display_meta` longtext COLLATE utf8mb4_unicode_520_ci,
  `entries_grid_meta` longtext COLLATE utf8mb4_unicode_520_ci,
  `confirmations` longtext COLLATE utf8mb4_unicode_520_ci,
  `notifications` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`form_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `sp_gf_form_meta` WRITE;
/*!40000 ALTER TABLE `sp_gf_form_meta` DISABLE KEYS */;
INSERT INTO `sp_gf_form_meta` VALUES (1,'{\"title\":\"Home Page Form\",\"description\":\"\",\"labelPlacement\":\"top_label\",\"descriptionPlacement\":\"below\",\"button\":{\"type\":\"text\",\"text\":\"Submit Now\",\"imageUrl\":\"\"},\"fields\":[{\"type\":\"text\",\"id\":1,\"label\":\"\",\"adminLabel\":\"\",\"isRequired\":false,\"size\":\"large\",\"errorMessage\":\"\",\"visibility\":\"visible\",\"inputs\":null,\"formId\":1,\"description\":\"\",\"allowsPrepopulate\":false,\"inputMask\":false,\"inputMaskValue\":\"\",\"inputMaskIsCustom\":false,\"maxLength\":\"\",\"inputType\":\"\",\"labelPlacement\":\"\",\"descriptionPlacement\":\"\",\"subLabelPlacement\":\"\",\"placeholder\":\"Full Name\",\"cssClass\":\"full_name\",\"inputName\":\"\",\"noDuplicates\":false,\"defaultValue\":\"\",\"choices\":\"\",\"conditionalLogic\":\"\",\"productField\":\"\",\"enablePasswordInput\":\"\",\"multipleFiles\":false,\"maxFiles\":\"\",\"calculationFormula\":\"\",\"calculationRounding\":\"\",\"enableCalculation\":\"\",\"disableQuantity\":false,\"displayAllCategories\":false,\"useRichTextEditor\":false,\"pageNumber\":1,\"fields\":\"\",\"displayOnly\":\"\"},{\"type\":\"email\",\"id\":2,\"label\":\"\",\"adminLabel\":\"\",\"isRequired\":false,\"size\":\"large\",\"errorMessage\":\"Email\",\"visibility\":\"visible\",\"inputs\":null,\"formId\":1,\"description\":\"\",\"allowsPrepopulate\":false,\"inputMask\":false,\"inputMaskValue\":\"\",\"inputMaskIsCustom\":false,\"maxLength\":\"\",\"inputType\":\"\",\"labelPlacement\":\"\",\"descriptionPlacement\":\"\",\"subLabelPlacement\":\"\",\"placeholder\":\"Email\",\"cssClass\":\"input_email\",\"inputName\":\"\",\"noDuplicates\":false,\"defaultValue\":\"\",\"choices\":\"\",\"conditionalLogic\":\"\",\"productField\":\"\",\"emailConfirmEnabled\":\"\",\"multipleFiles\":false,\"maxFiles\":\"\",\"calculationFormula\":\"\",\"calculationRounding\":\"\",\"enableCalculation\":\"\",\"disableQuantity\":false,\"displayAllCategories\":false,\"useRichTextEditor\":false,\"pageNumber\":1,\"fields\":\"\",\"displayOnly\":\"\"},{\"type\":\"text\",\"id\":6,\"label\":\"\",\"adminLabel\":\"\",\"isRequired\":false,\"size\":\"large\",\"errorMessage\":\"\",\"visibility\":\"visible\",\"inputs\":null,\"formId\":1,\"description\":\"\",\"allowsPrepopulate\":false,\"inputMask\":false,\"inputMaskValue\":\"\",\"inputMaskIsCustom\":false,\"maxLength\":\"\",\"inputType\":\"\",\"labelPlacement\":\"\",\"descriptionPlacement\":\"\",\"subLabelPlacement\":\"\",\"placeholder\":\"Phone\",\"cssClass\":\"input_phone\",\"inputName\":\"\",\"noDuplicates\":false,\"defaultValue\":\"\",\"choices\":\"\",\"conditionalLogic\":\"\",\"productField\":\"\",\"enablePasswordInput\":\"\",\"multipleFiles\":false,\"maxFiles\":\"\",\"calculationFormula\":\"\",\"calculationRounding\":\"\",\"enableCalculation\":\"\",\"disableQuantity\":false,\"displayAllCategories\":false,\"useRichTextEditor\":false,\"pageNumber\":1,\"fields\":\"\",\"displayOnly\":\"\"},{\"type\":\"textarea\",\"id\":5,\"label\":\"\",\"adminLabel\":\"\",\"isRequired\":false,\"size\":\"medium\",\"errorMessage\":\"\",\"visibility\":\"visible\",\"inputs\":null,\"formId\":1,\"description\":\"\",\"allowsPrepopulate\":false,\"inputMask\":false,\"inputMaskValue\":\"\",\"inputMaskIsCustom\":false,\"maxLength\":\"\",\"inputType\":\"\",\"labelPlacement\":\"\",\"descriptionPlacement\":\"\",\"subLabelPlacement\":\"\",\"placeholder\":\"Message\",\"cssClass\":\"msg\",\"inputName\":\"\",\"noDuplicates\":false,\"defaultValue\":\"\",\"choices\":\"\",\"conditionalLogic\":\"\",\"productField\":\"\",\"form_id\":\"\",\"useRichTextEditor\":false,\"multipleFiles\":false,\"maxFiles\":\"\",\"calculationFormula\":\"\",\"calculationRounding\":\"\",\"enableCalculation\":\"\",\"disableQuantity\":false,\"displayAllCategories\":false,\"pageNumber\":1,\"fields\":\"\",\"displayOnly\":\"\"},{\"type\":\"checkbox\",\"id\":7,\"label\":\"\",\"adminLabel\":\"\",\"isRequired\":false,\"size\":\"medium\",\"errorMessage\":\"\",\"visibility\":\"visible\",\"choices\":[{\"text\":\"I HAVE READ THE DISCLAIMER.\",\"value\":\"I HAVE READ THE DISCLAIMER.\",\"isSelected\":false,\"price\":\"\"}],\"inputs\":[{\"id\":\"7.1\",\"label\":\"I HAVE READ THE DISCLAIMER.\",\"name\":\"\"}],\"formId\":1,\"description\":\"\",\"allowsPrepopulate\":false,\"inputMask\":false,\"inputMaskValue\":\"\",\"inputMaskIsCustom\":false,\"maxLength\":\"\",\"inputType\":\"\",\"labelPlacement\":\"\",\"descriptionPlacement\":\"\",\"subLabelPlacement\":\"\",\"placeholder\":\"\",\"cssClass\":\"\",\"inputName\":\"\",\"noDuplicates\":false,\"defaultValue\":\"\",\"conditionalLogic\":\"\",\"productField\":\"\",\"enableSelectAll\":\"\",\"enablePrice\":\"\",\"multipleFiles\":false,\"maxFiles\":\"\",\"calculationFormula\":\"\",\"calculationRounding\":\"\",\"enableCalculation\":\"\",\"disableQuantity\":false,\"displayAllCategories\":false,\"useRichTextEditor\":false,\"pageNumber\":1,\"fields\":\"\",\"displayOnly\":\"\"}],\"version\":\"2.4.5.1\",\"id\":1,\"useCurrentUserAsAuthor\":true,\"postContentTemplateEnabled\":false,\"postTitleTemplateEnabled\":false,\"postTitleTemplate\":\"\",\"postContentTemplate\":\"\",\"lastPageButton\":null,\"pagination\":null,\"firstPageCssClass\":null,\"nextFieldId\":8,\"notifications\":{\"5c752c49075e8\":{\"id\":\"5c752c49075e8\",\"to\":\"{admin_email}\",\"name\":\"Admin Notification\",\"event\":\"form_submission\",\"toType\":\"email\",\"subject\":\"New submission from {form_title}\",\"message\":\"{all_fields}\"}},\"confirmations\":{\"5c752c4907ae9\":{\"id\":\"5c752c4907ae9\",\"name\":\"Default Confirmation\",\"isDefault\":true,\"type\":\"message\",\"message\":\"Thanks for contacting us! We will get in touch with you shortly.\",\"url\":\"\",\"pageId\":\"\",\"queryString\":\"\"}},\"subLabelPlacement\":\"below\",\"cssClass\":\"\",\"enableHoneypot\":false,\"enableAnimation\":false,\"save\":{\"enabled\":false,\"button\":{\"type\":\"link\",\"text\":\"Save and Continue Later\"}},\"limitEntries\":false,\"limitEntriesCount\":\"\",\"limitEntriesPeriod\":\"\",\"limitEntriesMessage\":\"\",\"scheduleForm\":false,\"scheduleStart\":\"\",\"scheduleStartHour\":\"\",\"scheduleStartMinute\":\"\",\"scheduleStartAmpm\":\"\",\"scheduleEnd\":\"\",\"scheduleEndHour\":\"\",\"scheduleEndMinute\":\"\",\"scheduleEndAmpm\":\"\",\"schedulePendingMessage\":\"\",\"scheduleMessage\":\"\",\"requireLogin\":false,\"requireLoginMessage\":\"\"}',NULL,'{\"5c752c4907ae9\":{\"id\":\"5c752c4907ae9\",\"name\":\"Default Confirmation\",\"isDefault\":true,\"type\":\"message\",\"message\":\"Thanks for contacting us! We will get in touch with you shortly.\",\"url\":\"\",\"pageId\":\"\",\"queryString\":\"\"}}','{\"5c752c49075e8\":{\"id\":\"5c752c49075e8\",\"to\":\"{admin_email}\",\"name\":\"Admin Notification\",\"event\":\"form_submission\",\"toType\":\"email\",\"subject\":\"New submission from {form_title}\",\"message\":\"{all_fields}\"}}');
/*!40000 ALTER TABLE `sp_gf_form_meta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

