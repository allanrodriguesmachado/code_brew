CREATE
EXTENSION IF NOT EXISTS "uuid-ossp";

CREATE TABLE users
(
    user_id  uuid                  DEFAULT uuid_generate_v4(),
    role_id  uiid         NOT NULL,
    username VARCHAR(40)  NOT NULL,
    email    VARCHAR(128) NOT NULL,
    password VARCHAR(80)  NOT NULL,
    birthday DATE         NOT NULL,
    gender   char(2),
    photo    VARCHAR(100) NOT NULL DEFAULT 'anon.png',
    role_id  NUMERIC(11)  NOT NULL,
    ACTIVE   CHAR(1)      NOT NULL DEFAULT '1',
    views    NUMERIC(11)  NOT NULL DEFAULT '0',
    created  DATETIME     NOT NULL,
    modified DATETIME     NOT NULL,
    CONSTRAINT gender_ck CHECK (gender IN ('M', 'F', 'O', 'NS'))
);