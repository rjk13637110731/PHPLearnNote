ALTER TABLE testalter_tbl  DROP i;

ALTER TABLE testalter_tbl ADD i INT;

ALTER TABLE testalter_tbl DROP i;
ALTER TABLE testalter_tbl ADD i INT FIRST;
ALTER TABLE testalter_tbl DROP i;
ALTER TABLE testalter_tbl ADD i INT AFTER c;

ALTER TABLE testalter_tbl MODIFY c CHAR(10);

ALTER TABLE testalter_tbl CHANGE i j BIGINT;

ALTER TABLE testalter_tbl CHANGE j j INT;

ALTER TABLE testalter_tbl MODIFY j BIGINT NOT NULL DEFAULT 100;

ALTER TABLE testalter_tbl ALTER i SET DEFAULT 1000;

ALTER TABLE testalter_tbl ALTER i DROP DEFAULT;

ALTER TABLE testalter_tbl ENGINE = MYISAM;
SHOW TABLE STATUS LIKE 'testalter_tbl'\G

ALTER TABLE testalter_tbl RENAME TO alter_tbl;
