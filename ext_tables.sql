CREATE TABLE tx_cookielist_domain_model_type (
    name varchar(255) DEFAULT '' NOT NULL,
    description text
);

CREATE TABLE tx_cookielist_domain_model_provider (
    name varchar(255) DEFAULT '' NOT NULL,
    link varchar(1024) DEFAULT '' NOT NULL
);

CREATE TABLE tx_cookielist_domain_model_cookie (
    type int(11) unsigned NOT NULL default '0',
    name varchar(255) DEFAULT '' NOT NULL,
    purpose text,
    provider int(11) unsigned NOT NULL default '0',
    ttl mediumint(5) NOT NULL default '0',
    ttl_unit varchar(1) DEFAULT '' NOT NULL
);
