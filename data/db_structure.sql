/*
 Navicat PostgreSQL Data Transfer

 Source Server         : Local
 Source Server Type    : PostgreSQL
 Source Server Version : 100002
 Source Host           : localhost:5432
 Source Catalog        : postgres
 Source Schema         : public

 Target Server Type    : PostgreSQL
 Target Server Version : 100002
 File Encoding         : 65001

 Date: 21/02/2018 14:05:33
*/


-- ----------------------------
-- Table structure for shipping_types
-- ----------------------------
DROP TABLE IF EXISTS "public"."shipping_types";
CREATE TABLE "public"."shipping_types" (
  "id" int4 NOT NULL,
  "name" varchar(255) COLLATE "pg_catalog"."default",
  "delivery_days" int4
)
;

-- ----------------------------
-- Table structure for shippings
-- ----------------------------
DROP TABLE IF EXISTS "public"."shippings";
CREATE TABLE "public"."shippings" (
  "id" int4 NOT NULL,
  "type" int4,
  "tracking_id" varchar(256) COLLATE "pg_catalog"."default" NOT NULL,
  "customer_name" varchar(255) COLLATE "pg_catalog"."default",
  "entry_date" timestamp(6),
  "size_height" float8,
  "size_length" float8,
  "size_width" float8,
  "weight" float8
)
;

-- ----------------------------
-- Primary Key structure for table shipping_types
-- ----------------------------
ALTER TABLE "public"."shipping_types" ADD CONSTRAINT "shipping_types_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table shippings
-- ----------------------------
ALTER TABLE "public"."shippings" ADD CONSTRAINT "shippings_pkey" PRIMARY KEY ("tracking_id");
