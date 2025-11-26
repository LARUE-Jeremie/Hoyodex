
# SCHEMA
DROP SCHEMA IF EXISTS GENSHIN;
CREATE SCHEMA GENSHIN
  CHARACTER SET utf8
  COLLATE utf8_general_ci;
use GENSHIN;

# --- DATABASES

# Element
CREATE TABLE IF NOT EXISTS element (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    url_img VARCHAR(255) NOT NULL
);
# Weapon
CREATE TABLE IF NOT EXISTS weapon (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    url_img VARCHAR(255) NOT NULL
);
# Origin
CREATE TABLE IF NOT EXISTS origin (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    url_img VARCHAR(255) NOT NULL
);
# Character
CREATE TABLE IF NOT EXISTS personnage (
    id_personnage VARCHAR(50) NOT NULL PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    element INT NOT NULL,
    weapon INT NOT NULL,
    origin INT,
    rarity INT NOT NULL,
    url_img VARCHAR(255) NOT NULL
);

# --- CONSTRAINTS

# Element
ALTER TABLE personnage
ADD CONSTRAINT fk_personnage_element FOREIGN KEY (element)
REFERENCES element(id)
ON DELETE CASCADE
ON UPDATE CASCADE;
# Weapon
ALTER TABLE personnage
ADD CONSTRAINT fk_personnage_weapon FOREIGN KEY (weapon)
REFERENCES weapon(id)
ON DELETE CASCADE
ON UPDATE CASCADE;
# Origin
ALTER TABLE personnage
ADD CONSTRAINT fk_personnage_origin FOREIGN KEY (origin)
REFERENCES origin(id)
ON DELETE CASCADE
ON UPDATE CASCADE;



#SHOW VARIABLES LIKE 'local_infile';
SET GLOBAL local_infile = 1;

# --- INSERTS

# Element
INSERT INTO element (name, url_img) VALUES
('Hydro',   'public/img/elements/hydro.webp'),
('Geo',     'public/img/elements/geo.webp'),
('Dendro',  'public/img/elements/dendro.webp'),
('Cryo',    'public/img/elements/cryo.webp'),
('Electro', 'public/img/elements/electro.webp'),
('Pyro',    'public/img/elements/pyro.webp'),
('Anemo',   'public/img/elements/anemo.webp');

# Weapon
INSERT INTO weapon (name, url_img) VALUES
('Claymore', 'public/img/weapons/claymore.png'),
('Sword',    'public/img/weapons/sword.png'),
('Catalyst', 'public/img/weapons/catalyst.png'),
('Bow',      'public/img/weapons/bow.png'),
('Polearm',  'public/img/weapons/polearm.png');

# Origin
INSERT INTO origin (name, url_img) VALUES
('Nod-Krai', 'url/origin/nod_krai.png'),
('Mondstadt', 'url/origin/mondstadt.png'),
('Sumeru Akademiya', 'url/origin/sumeru_akademiya.png'),
('NA', 'url/origin/na.png'),
('Arataki Gang', 'url/origin/arataki_gang.png'),
('Bubu Pharmacy', 'url/origin/bubu_pharmacy.png'),
('Church of Favonius', 'url/origin/church_of_favonius.png'),
('The Crux', 'url/origin/the_crux.png'),
('Adventurers'' Guild', 'url/origin/adventurers_guild.png'),
('Aaru Village', 'url/origin/aaru_village.png'),
('The Steambird', 'url/origin/the_steambird.png'),
('Tianheng Thaumaturges', 'url/origin/tianheng_thaumaturges.png'),
('Temple of Silence', 'url/origin/temple_of_silence.png'),
('The Eremites', 'url/origin/the_eremites.png'),
('Dawn Winery', 'url/origin/dawn_winery.png'),
('The Cat''s Tail', 'url/origin/the_cats_tail.png'),
('The Palace of Alcazarzaray', 'url/origin/the_palace_of_alcazarzaray.png'),
('Knights of Favonius', 'url/origin/knights_of_favonius.png'),
('Haravatat', 'url/origin/haravatat.png'),
('Hotel Bouffes d''ete', 'url/origin/hotel_bouffes_dete.png'),
('Yuehai Pavilion', 'url/origin/yuehai_pavilion.png'),
('Watatsumi Island', 'url/origin/watatsumi_island.png'),
('Wangsheng Funeral Parlor', 'url/origin/wangsheng_funeral_parlor.png'),
('Yashiro Commission', 'url/origin/yashiro_commission.png'),
('Independent Design Studio', 'url/origin/independent_design_studio.png'),
('Liyue Qixing', 'url/origin/liyue_qixing.png'),
('Komaniya Express', 'url/origin/komaniya_express.png'),
('Tenryou Commission', 'url/origin/tenryou_commission.png'),
('Rtawahist', 'url/origin/rtawahist.png'),
('Sumeru City', 'url/origin/sumeru_city.png'),
('Zubayr Theater', 'url/origin/zubayr_theater.png'),
('Court of Fontaine', 'url/origin/court_of_fontaine.png'),
('Wolvendom', 'url/origin/wolvendom.png'),
('Inazuma City', 'url/origin/inazuma_city.png'),
('Shuumatsuban', 'url/origin/shuumatsuban.png'),
('Cloud Retainer''s Abode', 'url/origin/cloud_retainers_abode.png'),
('Fatui', 'url/origin/fatui.png'),
('Wanmin Restaurant', 'url/origin/wanmin_restaurant.png'),
('Liyue Adeptus', 'url/origin/liyue_adeptus.png'),
('Feiyun Commerce Guild', 'url/origin/feiyun_commerce_guild.png'),
('The Red Strings', 'url/origin/the_red_strings.png'),
('Grand Narukami Shrine', 'url/origin/grand_narukami_shrine.png'),
('Yanfei Legal Consultancy', 'url/origin/yanfei_legal_consultancy.png'),
('Streetward Rambler''s Abode', 'url/origin/streetward_ramblers_abode.png'),
('Yanshang Teahouse', 'url/origin/yanshang_teahouse.png'),
('Naganohara Fireworks', 'url/origin/naganohara_fireworks.png'),
('Yun-Han Opera House', 'url/origin/yun_han_opera_house.png'),
('Liyue Harbor', 'url/origin/liyue_harbor.png'),
('None', 'url/origin/none.png'),
('Gandharva Ville', 'url/origin/gandharva_ville.png');

# Character
INSERT INTO personnage (id_personnage, name, element, weapon, origin, rarity, url_img)
VALUES
('1', 'Aino', 1, 1, 1, 4,                   'https://i2.wp.com/images.genshin-builds.com/genshin/characters/aino/image.png?strip=all&quality=100&w=160'),
('2', 'Albedo', 2, 2, 2, 5,                 'https://i2.wp.com/images.genshin-builds.com/genshin/characters/albedo/image.png?strip=all&quality=100&w=160'),
('3', 'Alhaitham', 3, 2, 3, 5,              'https://i2.wp.com/images.genshin-builds.com/genshin/characters/alhaitham/image.png?strip=all&quality=100&w=160'),
('4', 'Aloy', 4, 4, 4, 5,                   'https://i2.wp.com/images.genshin-builds.com/genshin/characters/aloy/image.png?strip=all&quality=100&w=160'),
('5', 'Arataki Itto', 2, 1, 5, 5,           'https://i2.wp.com/images.genshin-builds.com/genshin/characters/arataki_itto/image.png?strip=all&quality=100&w=160'),
('6', 'Baizhu', 3, 3, 6, 5,                 'https://i2.wp.com/images.genshin-builds.com/genshin/characters/baizhu/image.png?strip=all&quality=100&w=160'),
('7', 'Barbara', 1, 3, 7, 4,                'https://i2.wp.com/images.genshin-builds.com/genshin/characters/barbara/image.png?strip=all&quality=100&w=160'),
('8', 'Beidou', 5, 1, 8, 4,                 'https://i2.wp.com/images.genshin-builds.com/genshin/characters/beidou/image.png?strip=all&quality=100&w=160'),
('9', 'Bennett', 6, 2, 9, 4,                'https://i2.wp.com/images.genshin-builds.com/genshin/characters/bennett/image.png?strip=all&quality=100&w=160'),
('10', 'Candace', 1, 5, 10, 4,              'https://i2.wp.com/images.genshin-builds.com/genshin/characters/candace/image.png?strip=all&quality=100&w=160'),
('11', 'Charlotte', 4, 3, 11, 4,            'https://i2.wp.com/images.genshin-builds.com/genshin/characters/charlotte/image.png?strip=all&quality=100&w=160'),
('12', 'Chongyun', 4, 1, 12, 4,             'https://i2.wp.com/images.genshin-builds.com/genshin/characters/chongyun/image.png?strip=all&quality=100&w=160'),
('13', 'Collei', 3, 4, 50, 4,               'https://i2.wp.com/images.genshin-builds.com/genshin/characters/collei/image.png?strip=all&quality=100&w=160'),
('14', 'Cyno', 5, 5, 13, 5,                 'https://i2.wp.com/images.genshin-builds.com/genshin/characters/cyno/image.png?strip=all&quality=100&w=160'),
('15', 'Dehya', 6, 1, 14, 5,                'https://i2.wp.com/images.genshin-builds.com/genshin/characters/dehya/image.png?strip=all&quality=100&w=160'),
('16', 'Diluc', 6, 1, 15, 5,                'https://i2.wp.com/images.genshin-builds.com/genshin/characters/diluc/image.png?strip=all&quality=100&w=160'),
('17', 'Diona', 4, 4, 16, 4,                'https://i2.wp.com/images.genshin-builds.com/genshin/characters/diona/image.png?strip=all&quality=100&w=160'),
('18', 'Dori', 5, 1, 17, 4,                 'https://i2.wp.com/images.genshin-builds.com/genshin/characters/dori/image.png?strip=all&quality=100&w=160'),
('19', 'Eula', 4, 1, 18, 5,                 'https://i2.wp.com/images.genshin-builds.com/genshin/characters/eula/image.png?strip=all&quality=100&w=160'),
('20', 'Faruzan', 7, 4, 19, 4,              'https://i2.wp.com/images.genshin-builds.com/genshin/characters/faruzan/image.png?strip=all&quality=100&w=160'),
('21', 'Fischl', 5, 4, 9, 4,                'https://i2.wp.com/images.genshin-builds.com/genshin/characters/fischl/image.png?strip=all&quality=100&w=160'),
('22', 'Freminet', 4, 1, 20, 4,             'https://i2.wp.com/images.genshin-builds.com/genshin/characters/freminet/image.png?strip=all&quality=100&w=160'),
('23', 'Furina', 1, 2, 32, 5,               'https://i2.wp.com/images.genshin-builds.com/genshin/characters/furina/image.png?strip=all&quality=100&w=160'),
('24', 'Ganyu', 4, 4, 21, 5,                'https://i2.wp.com/images.genshin-builds.com/genshin/characters/ganyu/image.png?strip=all&quality=100&w=160'),
('25', 'Gorou', 2, 4, 22, 4,                'https://i2.wp.com/images.genshin-builds.com/genshin/characters/gorou/image.png?strip=all&quality=100&w=160'),
('26', 'Hu Tao', 6, 5, 23, 5,               'https://i2.wp.com/images.genshin-builds.com/genshin/characters/hu_tao/image.png?strip=all&quality=100&w=160'),
('27', 'Jean', 7, 2, 18, 5,                 'https://i2.wp.com/images.genshin-builds.com/genshin/characters/jean/image.png?strip=all&quality=100&w=160'),
('28', 'Kaedehara Kazuha', 7, 2, 8, 5,      'https://i2.wp.com/images.genshin-builds.com/genshin/characters/kaedehara_kazuha/image.png?strip=all&quality=100&w=160'),
('29', 'Kaeya', 4, 2, 18, 4,                'https://i2.wp.com/images.genshin-builds.com/genshin/characters/kaeya/image.png?strip=all&quality=100&w=160'),
('30', 'Kamisato Ayaka', 4, 2, 24, 5,       'https://i2.wp.com/images.genshin-builds.com/genshin/characters/kamisato_ayaka/image.png?strip=all&quality=100&w=160'),
('31', 'Kamisato Ayato', 1, 2, 24, 5,       'https://i2.wp.com/images.genshin-builds.com/genshin/characters/kamisato_ayato/image.png?strip=all&quality=100&w=160'),
('32', 'Kaveh', 3, 1, 25, 4,                'https://i2.wp.com/images.genshin-builds.com/genshin/characters/kaveh/image.png?strip=all&quality=100&w=160'),
('33', 'Keqing', 5, 2, 26, 5,               'https://i2.wp.com/images.genshin-builds.com/genshin/characters/keqing/image.png?strip=all&quality=100&w=160'),
('34', 'Kirara', 3, 2, 27, 4,               'https://i2.wp.com/images.genshin-builds.com/genshin/characters/kirara/image.png?strip=all&quality=100&w=160'),
('35', 'Klee', 6, 3, 18, 5,                 'https://i2.wp.com/images.genshin-builds.com/genshin/characters/klee/image.png?strip=all&quality=100&w=160'),
('36', 'Kujou Sara', 5, 4, 28, 4,           'https://i2.wp.com/images.genshin-builds.com/genshin/characters/kujou_sara/image.png?strip=all&quality=100&w=160'),
('37', 'Kuki Shinobu', 5, 2, 5, 4,          'https://i2.wp.com/images.genshin-builds.com/genshin/characters/kuki_shinobu/image.png?strip=all&quality=100&w=160'),
('38', 'Layla', 4, 2, 29, 4,                'https://i2.wp.com/images.genshin-builds.com/genshin/characters/layla/image.png?strip=all&quality=100&w=160'),
('39', 'Lisa', 5, 3, 18, 4,                 'https://i2.wp.com/images.genshin-builds.com/genshin/characters/lisa/image.png?strip=all&quality=100&w=160'),
('40', 'Lynette', 7, 2, 20, 4,              'https://i2.wp.com/images.genshin-builds.com/genshin/characters/lynette/image.png?strip=all&quality=100&w=160'),
('41', 'Lyney', 6, 4, 20, 5,                'https://i2.wp.com/images.genshin-builds.com/genshin/characters/lyney/image.png?strip=all&quality=100&w=160'),
('42', 'Mika', 4, 5, 18, 4,                 'https://i2.wp.com/images.genshin-builds.com/genshin/characters/mika/image.png?strip=all&quality=100&w=160'),
('43', 'Mona', 1, 3, 2, 5,                  'https://i2.wp.com/images.genshin-builds.com/genshin/characters/mona/image.png?strip=all&quality=100&w=160'),
('44', 'Nahida', 3, 3, 30, 5,               'https://i2.wp.com/images.genshin-builds.com/genshin/characters/nahida/image.png?strip=all&quality=100&w=160'),
('45', 'Nilou', 1, 2, 31, 5,                'https://i2.wp.com/images.genshin-builds.com/genshin/characters/nilou/image.png?strip=all&quality=100&w=160'),
('46', 'Ningguang', 2, 3, 26, 4,            'https://i2.wp.com/images.genshin-builds.com/genshin/characters/ningguang/image.png?strip=all&quality=100&w=160'),
('47', 'Noelle', 2, 1, 18, 4,               'https://i2.wp.com/images.genshin-builds.com/genshin/characters/noelle/image.png?strip=all&quality=100&w=160'),
('48', 'Neuvillette', 1, 3, 32, 5,          'https://i2.wp.com/images.genshin-builds.com/genshin/characters/neuvillette/image.png?strip=all&quality=100&w=160'),
('49', 'Qiqi', 4, 2, 6, 5,                  'https://i2.wp.com/images.genshin-builds.com/genshin/characters/qiqi/image.png?strip=all&quality=100&w=160'),
('50', 'Raiden Shogun', 5, 5, 34, 5,        'https://i2.wp.com/images.genshin-builds.com/genshin/characters/raiden_shogun/image.png?strip=all&quality=100&w=160'),
('51', 'Razor', 5, 1, 33, 4,                'https://i2.wp.com/images.genshin-builds.com/genshin/characters/razor/image.png?strip=all&quality=100&w=160'),
('52', 'Rosaria', 4, 5, 7, 4,               'https://i2.wp.com/images.genshin-builds.com/genshin/characters/rosaria/image.png?strip=all&quality=100&w=160'),
('53', 'Sangonomiya Kokomi', 1, 3, 22, 5,   'https://i2.wp.com/images.genshin-builds.com/genshin/characters/sangonomiya_kokomi/image.png?strip=all&quality=100&w=160'),
('54', 'Sayu', 7, 1, 35, 4,                 'https://i2.wp.com/images.genshin-builds.com/genshin/characters/sayu/image.png?strip=all&quality=100&w=160'),
('55', 'Shenhe', 4, 5, 36, 5,               'https://i2.wp.com/images.genshin-builds.com/genshin/characters/shenhe/image.png?strip=all&quality=100&w=160'),
('56', 'Shikanoin Heizou', 7, 3, 28, 4,     'https://i2.wp.com/images.genshin-builds.com/genshin/characters/shikanoin_heizou/image.png?strip=all&quality=100&w=160'),
('57', 'Sucrose', 7, 3, 18, 4,              'https://i2.wp.com/images.genshin-builds.com/genshin/characters/sucrose/image.png?strip=all&quality=100&w=160'),
('58', 'Tartaglia', 1, 4, 37, 5,            'https://i2.wp.com/images.genshin-builds.com/genshin/characters/tartaglia/image.png?strip=all&quality=100&w=160'),
('59', 'Thoma', 6, 5, 24, 4,                'https://i2.wp.com/images.genshin-builds.com/genshin/characters/thoma/image.png?strip=all&quality=100&w=160'),
('60', 'Tighnari', 3, 4, 50, 5,             'https://i2.wp.com/images.genshin-builds.com/genshin/characters/tighnari/image.png?strip=all&quality=100&w=160'),
('61', 'Venti', 7, 4, 2, 5,                 'https://i2.wp.com/images.genshin-builds.com/genshin/characters/venti/image.png?strip=all&quality=100&w=160'),
('62', 'Wanderer', 7, 3, 49, 5,             'https://i2.wp.com/images.genshin-builds.com/genshin/characters/wanderer/image.png?strip=all&quality=100&w=160'),
('63', 'Wriothesley', 4, 3, 32, 5,          'https://i2.wp.com/images.genshin-builds.com/genshin/characters/wriothesley/image.png?strip=all&quality=100&w=160'),
('64', 'Xiangling', 6, 5, 38, 4,            'https://i2.wp.com/images.genshin-builds.com/genshin/characters/xiangling/image.png?strip=all&quality=100&w=160'),
('65', 'Xiao', 7, 5, 39, 5,                 'https://i2.wp.com/images.genshin-builds.com/genshin/characters/xiao/image.png?strip=all&quality=100&w=160'),
('66', 'Xingqiu', 1, 2, 40, 4,              'https://i2.wp.com/images.genshin-builds.com/genshin/characters/xingqiu/image.png?strip=all&quality=100&w=160'),
('67', 'Xinyan', 6, 1, 41, 4,               'https://i2.wp.com/images.genshin-builds.com/genshin/characters/xinyan/image.png?strip=all&quality=100&w=160'),
('68', 'Yae Miko', 5, 3, 42, 5,             'https://i2.wp.com/images.genshin-builds.com/genshin/characters/yae_miko/image.png?strip=all&quality=100&w=160'),
('69', 'Yanfei', 6, 3, 43, 4,               'https://i2.wp.com/images.genshin-builds.com/genshin/characters/yanfei/image.png?strip=all&quality=100&w=160'),
('70', 'Yaoyao', 3, 5, 44, 4,               'https://i2.wp.com/images.genshin-builds.com/genshin/characters/yaoyao/image.png?strip=all&quality=100&w=160'),
('71', 'Yelan', 1, 4, 45, 5,                'https://i2.wp.com/images.genshin-builds.com/genshin/characters/yelan/image.png?strip=all&quality=100&w=160'),
('72', 'Yoimiya', 6, 4, 46, 5,              'https://i2.wp.com/images.genshin-builds.com/genshin/characters/yoimiya/image.png?strip=all&quality=100&w=160'),
('73', 'Yun Jin', 2, 5, 47, 4,              'https://i2.wp.com/images.genshin-builds.com/genshin/characters/yun_jin/image.png?strip=all&quality=100&w=160'),
('74', 'Zhongli', 2, 5, 48, 5,              'https://i2.wp.com/images.genshin-builds.com/genshin/characters/zhongli/image.png?strip=all&quality=100&w=160');
