drop database if exists `eventsdb`;
CREATE DATABASE `eventsdb`;
use eventsdb;
CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `evtname` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `evtdescr` varchar(1000) COLLATE utf8_bin DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `state` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `evtdate` date COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO events (evtname, evtdescr, city, state, evtdate)
    VALUES
      ('Dog Show',    'The first annual dog show.', 'New York', 'NY', '2015-11-1'    );
