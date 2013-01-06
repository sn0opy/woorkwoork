CREATE TABLE IF NOT EXISTS "entries" (
	"id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
	"date" integer NOT NULL,
	"starttime" integer NOT NULL,
	"endtime" integer NOT NULL
);

CREATE TABLE IF NOT EXISTS "vacaccount" (
	"id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
	"fulltime" integer NOT NULL
);

INSERT INTO "vacaccount" (`fulltime`) VALUES ("0");
