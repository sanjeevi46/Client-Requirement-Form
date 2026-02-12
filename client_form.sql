



CREATE DATABASE client_form;

USE client_form;

CREATE TABLE requirements (
  id INT AUTO_INCREMENT PRIMARY KEY,

  -- Basic info
  business VARCHAR(255),
  services TEXT,
  audience VARCHAR(255),
  goal VARCHAR(100),

  -- Design
  logo VARCHAR(10),
  color_theme VARCHAR(100),
  example_sites TEXT,
  responsive VARCHAR(10),

  -- Website pages
  pages INT,
  page_list TEXT,
  custom_pages VARCHAR(255),

  -- Features
  contact_form VARCHAR(5),
  whatsapp VARCHAR(5),
  payment VARCHAR(5),
  admin_panel VARCHAR(5),
  login_system VARCHAR(5),
  gallery VARCHAR(5),
  seo VARCHAR(5),

  -- Content & Media
  text_content VARCHAR(20),
  images VARCHAR(20),
  videos VARCHAR(20),
  content_writing VARCHAR(5),

  -- Domain & Hosting
  domain VARCHAR(5),
  hosting VARCHAR(5),
  purchase_help VARCHAR(5),

  -- Budget
  budget INT,
  deadline DATE,

  -- Maintenance
  update_by VARCHAR(20),

  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);







-- drop table requirements ;

-- drop schema client_form;


 
select * from requirements;