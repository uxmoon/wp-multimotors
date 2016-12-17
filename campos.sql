-- dev2_mm_

-- Assign all articles by Author B to Author A
-- If you want to transfer the articles under Author B to merge with those under Author A, it will be very time consuming if you do it article by article. With the following SQL query, you can easily go through all the records and assign articles by Author B to go under Author A.

-- You will first need to obtain the author ID of both authors by going to your Author & User page in your WordPress admin panel. Click on the author’s name to view their profile. At the address bar, look for "user_id". That is the author ID information we require.

-- Solution:
UPDATE wp_posts SET post_author = 'new-author-id' WHERE post_author = 'old-author-id';

-- new meta keys / old meta keys

-- modelo
rw_model / cf_automodelo

-- color
rw_color / cf_autocolor

-- kilometraje
rw_mileage / cf_autokm

-- vendido
rw_sold / cf_is_sell

-- año
rw_year / cf_autoyear

-- info
rw_info / cf_autoinfo
