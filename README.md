# hướng dẫn replace DB


* query 1
UPDATE evnn_options SET option_value = replace(option_value, 'http://evnfc.twendeesoft.com', 'http://solar.evnfc.vn') 
WHERE option_name = 'home' OR option_name = 'siteurl';


query2:
UPDATE evnn_posts SET guid = replace(guid, 'http://evnfc.twendeesoft.com', 'http://solar.evnfc.vn');


query3:
UPDATE evnn_posts SET post_content = replace(post_content, 'http://evnfc.twendeesoft.com', 'http://solar.evnfc.vn');


query4:
UPDATE evnn_postmeta SET meta_value = replace(meta_value,'http://evnfc.twendeesoft.com', 'http://solar.evnfc.vn');
