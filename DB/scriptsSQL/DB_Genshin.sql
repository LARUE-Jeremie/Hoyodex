
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
('1', 'Aino', 'Hydro', 'Claymore', 'Nod-Krai', 4, 'aino.webp'),
('2', 'Albedo', 'Geo', 'Sword', 'Mondstadt', 5, 'albedo.webp'),
('3', 'Alhaitham', 'Dendro', 'Sword', 'Sumeru Akademiya', 5, 'alhaitham.webp'),
('4', 'Aloy', 'Cryo', 'Bow', 'NA', 5, 'aloy.webp'),
('5', 'Arataki Itto', 'Geo', 'Claymore', 'Arataki Gang', 5, 'arataki_itto.webp'),
('6', 'Baizhu', 'Dendro', 'Catalyst', 'Bubu Pharmacy', 5, 'baizhu.webp'),
('7', 'Barbara', 'Hydro', 'Catalyst', 'Church of Favonius', 4, 'barbara.webp'),
('8', 'Beidou', 'Electro', 'Claymore', 'The Crux', 4, 'beidou.webp'),
('9', 'Bennett', 'Pyro', 'Sword', 'Adventurers'' Guild', 4, 'bennett.webp'),
('10', 'Candace', 'Hydro', 'Polearm', 'Aaru Village', 4, 'candace.webp'),
('11', 'Charlotte', 'Cryo', 'Catalyst', 'The Steambird', 4, 'charlotte.webp'),
('12', 'Chongyun', 'Cryo', 'Claymore', 'Tianheng Thaumaturges', 4, 'chongyun.webp'),
('13', 'Collei', 'Dendro', 'Bow', 'Gandharva Ville', 4, 'collei.webp'),
('14', 'Cyno', 'Electro', 'Polearm', 'Temple of Silence', 5, 'cyno.webp'),
('15', 'Dehya', 'Pyro', 'Claymore', 'The Eremites', 5, 'dehya.webp'),
('16', 'Diluc', 'Pyro', 'Claymore', 'Dawn Winery', 5, 'diluc.webp'),
('17', 'Diona', 'Cryo', 'Bow', 'The Cat''s Tail', 4, 'diona.webp'),
('18', 'Dori', 'Electro', 'Claymore', 'The Palace of Alcazarzaray', 4, 'dori.webp'),
('19', 'Eula', 'Cryo', 'Claymore', 'Knights of Favonius', 5, 'eula.webp'),
('20', 'Faruzan', 'Anemo', 'Bow', 'Haravatat', 4, 'faruzan.webp'),
('21', 'Fischl', 'Electro', 'Bow', 'Adventurers'' Guild', 4, 'fischl.webp'),
('22', 'Freminet', 'Cryo', 'Claymore', 'Hotel Bouffes d''ete', 4, 'freminet.webp'),
('23', 'Furina', 'Hydro', 'Sword', 'Court of Fontaine', 5, 'furina.webp'),
('24', 'Ganyu', 'Cryo', 'Bow', 'Yuehai Pavilion', 5, 'ganyu.webp'),
('25', 'Gorou', 'Geo', 'Bow', 'Watatsumi Island', 4, 'gorou.webp'),
('26', 'Hu Tao', 'Pyro', 'Polearm', 'Wangsheng Funeral Parlor', 5, 'hu_tao.webp'),
('27', 'Jean', 'Anemo', 'Sword', 'Knights of Favonius', 5, 'jean.webp'),
('28', 'Kaedehara Kazuha', 'Anemo', 'Sword', 'The Crux', 5, 'kazuha.webp'),
('29', 'Kaeya', 'Cryo', 'Sword', 'Knights of Favonius', 4, 'kaeya.webp'),
('30', 'Kamisato Ayaka', 'Cryo', 'Sword', 'Yashiro Commission', 5, 'ayaka.webp'),
('31', 'Kamisato Ayato', 'Hydro', 'Sword', 'Yashiro Commission', 5, 'ayato.webp'),
('32', 'Kaveh', 'Dendro', 'Claymore', 'Independent Design Studio', 4, 'kaveh.webp'),
('33', 'Keqing', 'Electro', 'Sword', 'Liyue Qixing', 5, 'keqing.webp'),
('34', 'Kirara', 'Dendro', 'Sword', 'Komaniya Express', 4, 'kirara.webp'),
('35', 'Klee', 'Pyro', 'Catalyst', 'Knights of Favonius', 5, 'klee.webp'),
('36', 'Kujou Sara', 'Electro', 'Bow', 'Tenryou Commission', 4, 'sara.webp'),
('37', 'Kuki Shinobu', 'Electro', 'Sword', 'Arataki Gang', 4, 'shinobu.webp'),
('38', 'Layla', 'Cryo', 'Sword', 'Rtawahist', 4, 'layla.webp'),
('39', 'Lisa', 'Electro', 'Catalyst', 'Knights of Favonius', 4, 'lisa.webp'),
('40', 'Lynette', 'Anemo', 'Sword', 'Hotel Bouffes d''ete', 4, 'lynette.webp'),
('41', 'Lyney', 'Pyro', 'Bow', 'Hotel Bouffes d''ete', 5, 'lyney.webp'),
('42', 'Mika', 'Cryo', 'Polearm', 'Knights of Favonius', 4, 'mika.webp'),
('43', 'Mona', 'Hydro', 'Catalyst', 'Mondstadt', 5, 'mona.webp'),
('44', 'Nahida', 'Dendro', 'Catalyst', 'Sumeru City', 5, 'nahida.webp'),
('45', 'Nilou', 'Hydro', 'Sword', 'Zubayr Theater', 5, 'nilou.webp'),
('46', 'Ningguang', 'Geo', 'Catalyst', 'Liyue Qixing', 4, 'ningguang.webp'),
('47', 'Noelle', 'Geo', 'Claymore', 'Knights of Favonius', 4, 'noelle.webp'),
('48', 'Neuvillette', 'Hydro', 'Catalyst', 'Court of Fontaine', 5, 'neuvillette.webp'),
('49', 'Qiqi', 'Cryo', 'Sword', 'Bubu Pharmacy', 5, 'qiqi.webp'),
('50', 'Raiden Shogun', 'Electro', 'Polearm', 'Inazuma City', 5, 'raiden.webp'),
('51', 'Razor', 'Electro', 'Claymore', 'Wolvendom', 4, 'razor.webp'),
('52', 'Rosaria', 'Cryo', 'Polearm', 'Church of Favonius', 4, 'rosaria.webp'),
('53', 'Sangonomiya Kokomi', 'Hydro', 'Catalyst', 'Watatsumi Island', 5, 'kokomi.webp'),
('54', 'Sayu', 'Anemo', 'Claymore', 'Shuumatsuban', 4, 'sayu.webp'),
('55', 'Shenhe', 'Cryo', 'Polearm', 'Cloud Retainer''s Abode', 5, 'shenhe.webp'),
('56', 'Shikanoin Heizou', 'Anemo', 'Catalyst', 'Tenryou Commission', 4, 'heizou.webp'),
('57', 'Sucrose', 'Anemo', 'Catalyst', 'Knights of Favonius', 4, 'sucrose.webp'),
('58', 'Tartaglia', 'Hydro', 'Bow', 'Fatui', 5, 'tartaglia.webp'),
('59', 'Thoma', 'Pyro', 'Polearm', 'Yashiro Commission', 4, 'thoma.webp'),
('60', 'Tighnari', 'Dendro', 'Bow', 'Gandharva Ville', 5, 'tighnari.webp'),
('61', 'Venti', 'Anemo', 'Bow', 'Mondstadt', 5, 'venti.webp'),
('62', 'Wanderer', 'Anemo', 'Catalyst', 'None', 5, 'wanderer.webp'),
('63', 'Wriothesley', 'Cryo', 'Catalyst', 'Fortress of Meropide', 5, 'wriothesley.webp'),
('64', 'Xiangling', 'Pyro', 'Polearm', 'Wanmin Restaurant', 4, 'xiangling.webp'),
('65', 'Xiao', 'Anemo', 'Polearm', 'Liyue Adeptus', 5, 'xiao.webp'),
('66', 'Xingqiu', 'Hydro', 'Sword', 'Feiyun Commerce Guild', 4, 'xingqiu.webp'),
('67', 'Xinyan', 'Pyro', 'Claymore', 'The Red Strings', 4, 'xinyan.webp'),
('68', 'Yae Miko', 'Electro', 'Catalyst', 'Grand Narukami Shrine', 5, 'yae_miko.webp'),
('69', 'Yanfei', 'Pyro', 'Catalyst', 'Yanfei Legal Consultancy', 4, 'yanfei.webp'),
('70', 'Yaoyao', 'Dendro', 'Polearm', 'Streetward Rambler''s Abode', 4, 'yaoyao.webp'),
('71', 'Yelan', 'Hydro', 'Bow', 'Yanshang Teahouse', 5, 'yelan.webp'),
('72', 'Yoimiya', 'Pyro', 'Bow', 'Naganohara Fireworks', 5, 'yoimiya.webp'),
('73', 'Yun Jin', 'Geo', 'Polearm', 'Yun-Han Opera House', 4, 'yun_jin.webp'),
('74', 'Zhongli', 'Geo', 'Polearm', 'Liyue Harbor', 5, 'zhongli.webp');
