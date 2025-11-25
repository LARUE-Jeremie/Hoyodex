
# SCHEMA
DROP SCHEMA IF EXISTS GENSHIN;
CREATE SCHEMA GENSHIN
  CHARACTER SET utf8
  COLLATE utf8_general_ci;
use GENSHIN;

# DATABASE
CREATE TABLE IF NOT EXISTS personnage (
    id_personnage VARCHAR(50) NOT NULL PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    element VARCHAR(50) NOT NULL,
    unitclass VARCHAR(50) NOT NULL,
    origin VARCHAR(100),
    rarity INT NOT NULL,
    url_img VARCHAR(255) NOT NULL
);

#SHOW VARIABLES LIKE 'local_infile';
SET GLOBAL local_infile = 1;

# INSERTS
INSERT INTO personnage (id_personnage, name, element, unitclass, origin, rarity, url_img)
VALUES
('1', 'Aino', 'Hydro', 'Claymore', 'Nod-Krai', 4,                       'https://i2.wp.com/images.genshin-builds.com/genshin/characters/aino/image.png?strip=all&quality=100&w=160'),
('2', 'Albedo', 'Geo', 'Sword', 'Mondstadt', 5,                         'https://i2.wp.com/images.genshin-builds.com/genshin/characters/albedo/image.png?strip=all&quality=100&w=160'),
('3', 'Alhaitham', 'Dendro', 'Sword', 'Sumeru Akademiya', 5,            'https://i2.wp.com/images.genshin-builds.com/genshin/characters/alhaitham/image.png?strip=all&quality=100&w=160'),
('4', 'Aloy', 'Cryo', 'Bow', 'NA', 5,                                   'https://i2.wp.com/images.genshin-builds.com/genshin/characters/aloy/image.png?strip=all&quality=100&w=160'),
('5', 'Arataki Itto', 'Geo', 'Claymore', 'Arataki Gang', 5,             'https://i2.wp.com/images.genshin-builds.com/genshin/characters/arataki_itto/image.png?strip=all&quality=100&w=160'),
('6', 'Baizhu', 'Dendro', 'Catalyst', 'Bubu Pharmacy', 5,               'https://i2.wp.com/images.genshin-builds.com/genshin/characters/baizhu/image.png?strip=all&quality=100&w=160'),
('7', 'Barbara', 'Hydro', 'Catalyst', 'Church of Favonius', 4,          'https://i2.wp.com/images.genshin-builds.com/genshin/characters/barbara/image.png?strip=all&quality=100&w=160'),
('8', 'Beidou', 'Electro', 'Claymore', 'The Crux', 4,                   'https://i2.wp.com/images.genshin-builds.com/genshin/characters/beidou/image.png?strip=all&quality=100&w=160'),
('9', 'Bennett', 'Pyro', 'Sword', 'Adventurers'' Guild', 4,             'https://i2.wp.com/images.genshin-builds.com/genshin/characters/bennett/image.png?strip=all&quality=100&w=160'),
('10', 'Candace', 'Hydro', 'Polearm', 'Aaru Village', 4,                'https://i2.wp.com/images.genshin-builds.com/genshin/characters/candace/image.png?strip=all&quality=100&w=160'),
('11', 'Charlotte', 'Cryo', 'Catalyst', 'The Steambird', 4,             'https://i2.wp.com/images.genshin-builds.com/genshin/characters/charlotte/image.png?strip=all&quality=100&w=160'),
('12', 'Chongyun', 'Cryo', 'Claymore', 'Tianheng Thaumaturges', 4,      'https://i2.wp.com/images.genshin-builds.com/genshin/characters/chongyun/image.png?strip=all&quality=100&w=160'),
('13', 'Collei', 'Dendro', 'Bow', 'Gandharva Ville', 4,                 'https://i2.wp.com/images.genshin-builds.com/genshin/characters/collei/image.png?strip=all&quality=100&w=160'),
('14', 'Cyno', 'Electro', 'Polearm', 'Temple of Silence', 5,            'https://i2.wp.com/images.genshin-builds.com/genshin/characters/cyno/image.png?strip=all&quality=100&w=160'),
('15', 'Dehya', 'Pyro', 'Claymore', 'The Eremites', 5,                  'https://i2.wp.com/images.genshin-builds.com/genshin/characters/dehya/image.png?strip=all&quality=100&w=160'),
('16', 'Diluc', 'Pyro', 'Claymore', 'Dawn Winery', 5,                   'https://i2.wp.com/images.genshin-builds.com/genshin/characters/diluc/image.png?strip=all&quality=100&w=160'),
('17', 'Diona', 'Cryo', 'Bow', 'The Cat''s Tail', 4,                    'https://i2.wp.com/images.genshin-builds.com/genshin/characters/diona/image.png?strip=all&quality=100&w=160'),
('18', 'Dori', 'Electro', 'Claymore', 'The Palace of Alcazarzaray', 4,  'https://i2.wp.com/images.genshin-builds.com/genshin/characters/dori/image.png?strip=all&quality=100&w=160'),
('19', 'Eula', 'Cryo', 'Claymore', 'Knights of Favonius', 5,            'https://i2.wp.com/images.genshin-builds.com/genshin/characters/eula/image.png?strip=all&quality=100&w=160'),
('20', 'Faruzan', 'Anemo', 'Bow', 'Haravatat', 4,                       'https://i2.wp.com/images.genshin-builds.com/genshin/characters/faruzan/image.png?strip=all&quality=100&w=160'),
('21', 'Fischl', 'Electro', 'Bow', 'Adventurers'' Guild', 4,            'https://i2.wp.com/images.genshin-builds.com/genshin/characters/fischl/image.png?strip=all&quality=100&w=160'),
('22', 'Freminet', 'Cryo', 'Claymore', 'Hotel Bouffes d''ete', 4,       'https://i2.wp.com/images.genshin-builds.com/genshin/characters/freminet/image.png?strip=all&quality=100&w=160'),
('23', 'Furina', 'Hydro', 'Sword', 'Court of Fontaine', 5,              'https://i2.wp.com/images.genshin-builds.com/genshin/characters/furina/image.png?strip=all&quality=100&w=160'),
('24', 'Ganyu', 'Cryo', 'Bow', 'Yuehai Pavilion', 5,                    'https://i2.wp.com/images.genshin-builds.com/genshin/characters/ganyu/image.png?strip=all&quality=100&w=160'),
('25', 'Gorou', 'Geo', 'Bow', 'Watatsumi Island', 4,                    'https://i2.wp.com/images.genshin-builds.com/genshin/characters/gorou/image.png?strip=all&quality=100&w=160'),
('26', 'Hu Tao', 'Pyro', 'Polearm', 'Wangsheng Funeral Parlor', 5,      'https://i2.wp.com/images.genshin-builds.com/genshin/characters/hu_tao/image.png?strip=all&quality=100&w=160'),
('27', 'Jean', 'Anemo', 'Sword', 'Knights of Favonius', 5,              'https://i2.wp.com/images.genshin-builds.com/genshin/characters/jean/image.png?strip=all&quality=100&w=160'),
('28', 'Kaedehara Kazuha', 'Anemo', 'Sword', 'The Crux', 5,             'https://i2.wp.com/images.genshin-builds.com/genshin/characters/kaedehara_kazuha/image.png?strip=all&quality=100&w=160'),
('29', 'Kaeya', 'Cryo', 'Sword', 'Knights of Favonius', 4,              'https://i2.wp.com/images.genshin-builds.com/genshin/characters/kaeya/image.png?strip=all&quality=100&w=160'),
('30', 'Kamisato Ayaka', 'Cryo', 'Sword', 'Yashiro Commission', 5,      'https://i2.wp.com/images.genshin-builds.com/genshin/characters/kamisato_ayaka/image.png?strip=all&quality=100&w=160'),
('31', 'Kamisato Ayato', 'Hydro', 'Sword', 'Yashiro Commission', 5,     'https://i2.wp.com/images.genshin-builds.com/genshin/characters/kamisato_ayato/image.png?strip=all&quality=100&w=160'),
('32', 'Kaveh', 'Dendro', 'Claymore', 'Independent Design Studio', 4,   'https://i2.wp.com/images.genshin-builds.com/genshin/characters/kaveh/image.png?strip=all&quality=100&w=160'),
('33', 'Keqing', 'Electro', 'Sword', 'Liyue Qixing', 5,                 'https://i2.wp.com/images.genshin-builds.com/genshin/characters/keqing/image.png?strip=all&quality=100&w=160'),
('34', 'Kirara', 'Dendro', 'Sword', 'Komaniya Express', 4,              'https://i2.wp.com/images.genshin-builds.com/genshin/characters/kirara/image.png?strip=all&quality=100&w=160'),
('35', 'Klee', 'Pyro', 'Catalyst', 'Knights of Favonius', 5,            'https://i2.wp.com/images.genshin-builds.com/genshin/characters/klee/image.png?strip=all&quality=100&w=160'),
('36', 'Kujou Sara', 'Electro', 'Bow', 'Tenryou Commission', 4,         'https://i2.wp.com/images.genshin-builds.com/genshin/characters/kujou_sara/image.png?strip=all&quality=100&w=160'),
('37', 'Kuki Shinobu', 'Electro', 'Sword', 'Arataki Gang', 4,           'https://i2.wp.com/images.genshin-builds.com/genshin/characters/kuki_shinobu/image.png?strip=all&quality=100&w=160'),
('38', 'Layla', 'Cryo', 'Sword', 'Rtawahist', 4,                        'https://i2.wp.com/images.genshin-builds.com/genshin/characters/layla/image.png?strip=all&quality=100&w=160'),
('39', 'Lisa', 'Electro', 'Catalyst', 'Knights of Favonius', 4,         'https://i2.wp.com/images.genshin-builds.com/genshin/characters/lisa/image.png?strip=all&quality=100&w=160'),
('40', 'Lynette', 'Anemo', 'Sword', 'Hotel Bouffes d''ete', 4,          'https://i2.wp.com/images.genshin-builds.com/genshin/characters/lynette/image.png?strip=all&quality=100&w=160'),
('41', 'Lyney', 'Pyro', 'Bow', 'Hotel Bouffes d''ete', 5,               'https://i2.wp.com/images.genshin-builds.com/genshin/characters/lyney/image.png?strip=all&quality=100&w=160'),
('42', 'Mika', 'Cryo', 'Polearm', 'Knights of Favonius', 4,             'https://i2.wp.com/images.genshin-builds.com/genshin/characters/mika/image.png?strip=all&quality=100&w=160'),
('43', 'Mona', 'Hydro', 'Catalyst', 'Mondstadt', 5,                     'https://i2.wp.com/images.genshin-builds.com/genshin/characters/mona/image.png?strip=all&quality=100&w=160'),
('44', 'Nahida', 'Dendro', 'Catalyst', 'Sumeru City', 5,                'https://i2.wp.com/images.genshin-builds.com/genshin/characters/nahida/image.png?strip=all&quality=100&w=160'),
('45', 'Nilou', 'Hydro', 'Sword', 'Zubayr Theater', 5,                  'https://i2.wp.com/images.genshin-builds.com/genshin/characters/nilou/image.png?strip=all&quality=100&w=160'),
('46', 'Ningguang', 'Geo', 'Catalyst', 'Liyue Qixing', 4,               'https://i2.wp.com/images.genshin-builds.com/genshin/characters/ningguang/image.png?strip=all&quality=100&w=160'),
('47', 'Noelle', 'Geo', 'Claymore', 'Knights of Favonius', 4,           'https://i2.wp.com/images.genshin-builds.com/genshin/characters/noelle/image.png?strip=all&quality=100&w=160'),
('48', 'Neuvillette', 'Hydro', 'Catalyst', 'Court of Fontaine', 5,      'https://i2.wp.com/images.genshin-builds.com/genshin/characters/neuvillette/image.png?strip=all&quality=100&w=160'),
('49', 'Qiqi', 'Cryo', 'Sword', 'Bubu Pharmacy', 5,                     'https://i2.wp.com/images.genshin-builds.com/genshin/characters/qiqi/image.png?strip=all&quality=100&w=160'),
('50', 'Raiden Shogun', 'Electro', 'Polearm', 'Inazuma City', 5,        'https://i2.wp.com/images.genshin-builds.com/genshin/characters/raiden_shogun/image.png?strip=all&quality=100&w=160'),
('51', 'Razor', 'Electro', 'Claymore', 'Wolvendom', 4,                  'https://i2.wp.com/images.genshin-builds.com/genshin/characters/razor/image.png?strip=all&quality=100&w=160'),
('52', 'Rosaria', 'Cryo', 'Polearm', 'Church of Favonius', 4,           'https://i2.wp.com/images.genshin-builds.com/genshin/characters/rosaria/image.png?strip=all&quality=100&w=160'),
('53', 'Sangonomiya Kokomi', 'Hydro', 'Catalyst', 'Watatsumi Island', 5,'https://i2.wp.com/images.genshin-builds.com/genshin/characters/sangonomiya_kokomi/image.png?strip=all&quality=100&w=160'),
('54', 'Sayu', 'Anemo', 'Claymore', 'Shuumatsuban', 4,                  'https://i2.wp.com/images.genshin-builds.com/genshin/characters/sayu/image.png?strip=all&quality=100&w=160'),
('55', 'Shenhe', 'Cryo', 'Polearm', 'Cloud Retainer''s Abode', 5,       'https://i2.wp.com/images.genshin-builds.com/genshin/characters/shenhe/image.png?strip=all&quality=100&w=160'),
('56', 'Shikanoin Heizou', 'Anemo', 'Catalyst', 'Tenryou Commission', 4,'https://i2.wp.com/images.genshin-builds.com/genshin/characters/shikanoin_heizou/image.png?strip=all&quality=100&w=160'),
('57', 'Sucrose', 'Anemo', 'Catalyst', 'Knights of Favonius', 4,        'https://i2.wp.com/images.genshin-builds.com/genshin/characters/sucrose/image.png?strip=all&quality=100&w=160'),
('58', 'Tartaglia', 'Hydro', 'Bow', 'Fatui', 5,                         'https://i2.wp.com/images.genshin-builds.com/genshin/characters/tartaglia/image.png?strip=all&quality=100&w=160'),
('59', 'Thoma', 'Pyro', 'Polearm', 'Yashiro Commission', 4,             'https://i2.wp.com/images.genshin-builds.com/genshin/characters/thoma/image.png?strip=all&quality=100&w=160'),
('60', 'Tighnari', 'Dendro', 'Bow', 'Gandharva Ville', 5,               'https://i2.wp.com/images.genshin-builds.com/genshin/characters/tighnari/image.png?strip=all&quality=100&w=160'),
('61', 'Venti', 'Anemo', 'Bow', 'Mondstadt', 5,                         'https://i2.wp.com/images.genshin-builds.com/genshin/characters/venti/image.png?strip=all&quality=100&w=160'),
('62', 'Wanderer', 'Anemo', 'Catalyst', 'None', 5,                      'https://i2.wp.com/images.genshin-builds.com/genshin/characters/wanderer/image.png?strip=all&quality=100&w=160'),
('63', 'Wriothesley', 'Cryo', 'Catalyst', 'Fortress of Meropide', 5,    'https://i2.wp.com/images.genshin-builds.com/genshin/characters/wriothesley/image.png?strip=all&quality=100&w=160'),
('64', 'Xiangling', 'Pyro', 'Polearm', 'Wanmin Restaurant', 4,          'https://i2.wp.com/images.genshin-builds.com/genshin/characters/xiangling/image.png?strip=all&quality=100&w=160'),
('65', 'Xiao', 'Anemo', 'Polearm', 'Liyue Adeptus', 5,                  'https://i2.wp.com/images.genshin-builds.com/genshin/characters/xiao/image.png?strip=all&quality=100&w=160'),
('66', 'Xingqiu', 'Hydro', 'Sword', 'Feiyun Commerce Guild', 4,         'https://i2.wp.com/images.genshin-builds.com/genshin/characters/xingqiu/image.png?strip=all&quality=100&w=160'),
('67', 'Xinyan', 'Pyro', 'Claymore', 'The Red Strings', 4,              'https://i2.wp.com/images.genshin-builds.com/genshin/characters/xinyan/image.png?strip=all&quality=100&w=160'),
('68', 'Yae Miko', 'Electro', 'Catalyst', 'Grand Narukami Shrine', 5,   'https://i2.wp.com/images.genshin-builds.com/genshin/characters/yae_miko/image.png?strip=all&quality=100&w=160'),
('69', 'Yanfei', 'Pyro', 'Catalyst', 'Yanfei Legal Consultancy', 4,     'https://i2.wp.com/images.genshin-builds.com/genshin/characters/yanfei/image.png?strip=all&quality=100&w=160'),
('70', 'Yaoyao', 'Dendro', 'Polearm', 'Streetward Rambler''s Abode', 4, 'https://i2.wp.com/images.genshin-builds.com/genshin/characters/yaoyao/image.png?strip=all&quality=100&w=160'),
('71', 'Yelan', 'Hydro', 'Bow', 'Yanshang Teahouse', 5,                 'https://i2.wp.com/images.genshin-builds.com/genshin/characters/yelan/image.png?strip=all&quality=100&w=160'),
('72', 'Yoimiya', 'Pyro', 'Bow', 'Naganohara Fireworks', 5,             'https://i2.wp.com/images.genshin-builds.com/genshin/characters/yoimiya/image.png?strip=all&quality=100&w=160'),
('73', 'Yun Jin', 'Geo', 'Polearm', 'Yun-Han Opera House', 4,           'https://i2.wp.com/images.genshin-builds.com/genshin/characters/yun_jin/image.png?strip=all&quality=100&w=160'),
('74', 'Zhongli', 'Geo', 'Polearm', 'Liyue Harbor', 5,                  'https://i2.wp.com/images.genshin-builds.com/genshin/characters/zhongli/image.png?strip=all&quality=100&w=160');
