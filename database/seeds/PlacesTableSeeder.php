<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1 ( Kachin State ) => 4
            
            // 1
            DB::table('places')->insert([
                'name'       => 'Taping River',
                'photo'      => '/storage/photo/places/trpaing.jpg',
                'description'    => 'The Taping River, known as Ta Hkaw Hka in Kachin and Daying River is a river in Yunnan province, China and northern Myanmar (Burma). It is the first tributary of the country`s chief river, the Irrawaddy, and the watersheds between it and the N`mai Hka river to the northwest and the rivers Shweli and Salween to the southeast form part of the boundary between China and Myanmar. Its source lies in Yingjiang County of Yunnan, and it enters the Irrawaddy near Bhamo, Kachin State.',
                'region_id'      => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 2
            DB::table('places')->insert([
                'name'       => 'Indawgyi Lake',
                'photo'      => '/storage/photo/places/1920px-In_Daw_Gyi_Pagoda.jpg',
                'description'    => 'Indawgyi Lake is a secluded destination for nature lovers in remote Kachin State. The largest lake in Myanmar, Indawgyi remains pristine and undeveloped and has been designated as a UNESCO Biosphere Reserve; it’s still possible to find places where you won’t hear the drone of a motor – or even see a single boat. The area is largely untouched by tourism, with few foreigners making the journey this far north. It’s truly a place to relax and enjoy the simple rural lifestyle and the beautiful natural surroundings.',
                'region_id'      => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 3
            DB::table('places')->insert([
                'name'       => 'Hkakabo Razi',
                'photo'      => '/storage/photo/places/hkakabo-razi.jpg',
                'description'    => 'The Republic of Myanmar, also commonly referred to as Burma, is a nation in the South East Asia region bordering Bangladesh, China, Laos, Thailand, and India. The country has a total land area of 676,578 square kilometers and lies between latitudes 9 Degrees North and 29 Degrees North and longitudes of 91 Degrees East and 102 Degrees East. Much of Burma lies within the Tropic of Cancer and equator in the monsoon regions of Asia. The country’s coastal area receives an annual rainfall of 5,000 millimeters. Myanmar has several mountain ranges including Bago Yoma, Rakhine Yoma, Tenasserim Hills, and Shan Hills. The mountains within the country run north to south from the Himalayas. The chain of mountains divides the country’s three rivers, the Salween, Irrawaddy, and Sittaung Rivers. The highest mountains in Myanmar are looked at herein.
                    <h1> Hkakabo Razi </h1>
                    Hkakabo Razi is the highest point of elevation and the highest mountain in Myanmar with an elevation of 19,295 feet (5,881 meters). The mountain is also the highest in the South East Asia and it is found in the northern Myanmar state of Kachin in the Greater Himalayan mountain range. Mount Hkakabo Razi is surrounded by the Hkakabo Razi National Park which is entirely mountainous made up of the broad-leaved evergreen rain forest. The mountain is divided into zones depending on the level of elevation. The zones include sub-tropical temperate (8,000 to 9,000 feet), semi-deciduous forest, needle-leaves snow forest, and the alpine. Hkakabo Razi Mountain experiences an alpine climate with snow more common than rains especially during winter with a temperature range of between -60 Degrees Celsius and 23 Degrees Celsius. The first ascent of the mountain was made in 1996 by Takashi Ozaki and Nyima Gyaltsen. It took long for the first ascent of the mountain because none-citizens were not allowed into the area around the mountain until late 1993. Mount Hkakabo Razi and Hkakabo Razi National Park is rich in flora and fauna which have not been extensively studied or researched on.',
                'region_id'      => 4,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 4
            DB::table('places')->insert([
                'name'       => 'Kachin State Cultural Museum',
                'photo'      => '/storage/photo/places/kachin-state-cultural-museum-myitkyina_myanmar.jpg',
                'description'    => 'The history of Myanmar museums from the earliest such as ancient palaces and Pitaka libraries, through museums established before independence such as Bagan Archaeological Museum, to the most recent-days is described. The establishment of the Ministry of Culture in 1952, 4 years after regaining independence, led to construction of the first National Museum (Yangon) and several other museums. Currently, Myanmar museums under the Ministry of Culture can be classified as national museums, archaeological museums, regional cultural museums, and memorial museums. Other kinds of museum are now appearing under other ministries and in the private sector in Myanmar. There is an urgent need for collaboration between these different museums to form a nation-wide museum organization, in order to work together for the improvement of Myanmar museums, and to facilitate international cooperation.',
                'region_id'      => 4,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // ------------------------------------------------


        // 2 ( Kayah State ) => 6

            // 5
            DB::table('places')->insert([
                'name'       => 'Taung Kwe Pagoda',
                'photo'      => '/storage/photo/places/taung-kwe-pagoda.jpg',
                'description'    => 'The Taung Kwe Pagoda (သီရိမင်္ဂလာတောင်ကွဲ‌စေတီတော်) lies in the south of Loikaw, Kayah State, atop Thirri Mingala Hill, that has nine peaks on nine broken hills. It was called Mingala Hill, Phawmye in Kayah, Taunggwe in Myanmar, and Loi Pha Phat in Shan.

                    It is 387 feet high. There are pagodas on the nine hillocks named Pyilone Chantha, Shwe Yattaung, Shweyin-aye, Kyauk Thamban, Aung-dawmu, Sutaungpyi, lower Kyaikhtiyo, upper Kyaikhtiyo and Shwe-Pyi-Aye. Pyilone Chantha Pagoda was built in 1295 (1933) to be 36 feet high and 27 feet in girth. Shwe Yattaung Pagoda was built in 1257 (1895) to be 20 feet high and 15 feet in girth. Shwe Yin-aye Pagoda was built in 1275 (1913) to be seven feet high and five feet and six inches in girth. Kyauk Tbamban Pagoda was built in 1276 (1914) to be four feet and six inches high and three feet in girth. Aungdawmu Pagoda was built in 1291(1929) to be eleven feet and six inches high and ten feet nine inches in girth. Sutaungpyi Pagoda was built in 1291 (1929) to be eleven feet six inches high and nine feet six inches in girth. Lower Kyaikhtiyo Pagoda was built in 1295 (1933) to be five feet and ten inches high and five feet ten inches in girth. Upper Kyaikhtiyo Pagoda was built in 1296 (1934) to be five feet and six inches high and five feet in girth. Shwe Pyi-aye Pagoda was built in 1312 (1950) to be seven feet high and six feet and ten inches in girth.',
                'region_id'      => 6,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 6
            DB::table('places')->insert([
                'name'       => 'Kyat Cave',
                'photo'      => '/storage/photo/places/kyat_cave.jpg',
                'description'    => 'Kyat Cave is a limestone and dolomite cave situated about ten miles east from Loi Kaw, Kayah State in Myanmar. It is a popular travel destination because of its untouched nature but also for a more curious attraction -  several coffins of an ethnic group. The longest coffins are 15 feet long and the shortest ones 2 feet and are made by engraving logs. The coffins are in several positions, some are even placed in the big cavities of the cave ceiling.',
                'region_id'      => 6,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 7
            DB::table('places')->insert([
                'name'       => 'Seven Stages lake',
                'photo'      => '/storage/photo/places/sevenstageslake.jpg',
                'description'    => 'The lakes are about 40 minutes southeast of Loikaw and make for a fantastic, picnic-focused day out. The green-blue lakes vary in size as well as accessibility and you’ll discover that some are better for swimming and chilling than others. That said the scenery is consistently stunning so it’s worth visiting them all if possible.',
                'region_id'      => 6,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 8
            DB::table('places')->insert([
                'name'       => 'Aung Tha Pyae Cave',
                'photo'      => '/storage/photo/places/aungthapyae.jpg',
                'description'    => 'This little-seen cave sits amid farmland around 20 minutes` drive north of Loikaw. The cave is close to a 1km in length and houses a dozen or so buddha statues, as well as many stalactites and stalagmites. The cave floor gets very wet, especially during the rainy season (June to October), so watch your step. Bring a torch (flashlight) in case the power is off and there are no lights.',
                'region_id'      => 6,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 9
            DB::table('places')->insert([
                'name'       => 'Htee Se Kha Waterfall',
                'photo'      => '/storage/photo/places/IMG_0051.jpg',
                'description'    => 'This modest but pretty waterfall is really three separate falls that plunge into a pool that1s a popular swimming spot. The falls are surrounded on three sides by buddha statues and a monastery. It1s a holy place, so if you1re going to swim here do so in shorts and a T-shirt rather than trunks or a bikini.The waterfall is almost on the border between Kayah and Shan states, about 50 minutes` drive north of Loikaw. This drive takes you through some beautiful countryside and a series of Kayan, Pa-O and Lisu villages. ',
                'region_id'      => 6,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 10
            DB::table('places')->insert([
                'name'       => 'Ngwe Taung Dam',
                'photo'      => '/storage/photo/places/1600px-Ngwe_Taung_Dam.jpg',
                'description'    => 'Loikaw’s nearest neighbour, Demoso, holds its own when it comes to natural beauty. The dam, which helps to irrigate 4,000 acres of farmland, sits between the village of Ngwe Taung and Demoso and is something of a local magnet. Couples pose for selfies, Kayah women in traditional neck rings sell handicrafts and kids leap from the railings into the water. Even if you decide to give the swimming a miss you still have the option of circling the lake, which can be done either on foot or by bicycle.Once you’re done exploring the lake, you might consider heading over to Demoso market for some fried frogs (yes, really) and some traditional khaung yay, a mildly alcoholic millet wine.',
                'region_id'      => 6,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // ------------------------------------------------


        // 3 ( Kayin State )

            // 11
            DB::table('places')->insert([
                'name'       => 'Three Pagodas',
                'photo'      => '/storage/photo/places/Wikitravel_Three_Pagodas_Pass_Banner.jpg',
                'description'    => 'Three Pagodas Pass, Thai Phra Chedi Sam Ong, mountain pass in the Tenasserim Mountain Range on the Myanmar (Burma)-Thailand border, 100 miles (160 km) southeast of Moulmein, Myanmar. The pass, at an elevation of 925 feet (282 m), links southeastern Myanmar and western Thailand. For centuries it was the chief link between Myanmar and the fertile plain of the Chao Phraya River, used both for trade and for military invasions. During World War II the Japanese built the Thanbyuzayat–Ban Pong railroad (commemorated in the book and movie The Bridge on the River Kwai) through the pass (see Kanchanaburi).',
                'region_id'      => 10,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 12
            DB::table('places')->insert([
                'name'       => 'Mount Zwegabin',
                'photo'      => '/storage/photo/places/mountzwegabin.jpg',
                'description'    => 'Mount Zwegabin (Kwekabaw) (Phlone: ခွဲါက္ၜင်; Burmese: ဇွဲကပင်တောင်; S`gaw Karen: ကွဲၢ်ကဘီကစၢၢ်) is a mountain in Myanmar. It is located in the region of Karen, in the southern part of the country, around 450 km south of the capital Naypyidaw.[1] The top of Zwegabin is 722 metres (2,369 ft) above sea level.',
                'region_id'      => 7,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 13
            DB::table('places')->insert([
                'name'       => 'Mahar Sadan Cave',
                'photo'      => '/storage/photo/places/MaharSadanCave.jpg',
                'description'    => 'This football-stadium-sized cave is simply breathtaking, its entrance dominated by dozens of buddha statues, a couple of pagodas and some newer clay wall carvings. With the cave now illuminated, you can scramble for 15 or 20 minutes through chambers as high as a cathedral, past truck-sized stalactites and, in places, walls of crystal.',
                'region_id'      => 7,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 14
            DB::table('places')->insert([
                'name'       => 'Kaw Kathaung Cave',
                'photo'      => '/storage/photo/places/kaw_kathaung_cave.jpg',
                'description'    => 'Though perhaps not as spectacular as other sites in the region, it’s one of the most prestigious and popular for local tourists, so it can get rather crowded on a busy day. Kaw Kathaung is another usual stop off in any Zwegabin day tour. Various religious buildings and statues lie outside the entrance to the shallow cave temple at the foot of the limestone cliff, including an unusual maze on the right just before the gate to the main compound. Follow the rough track along the base of the cliff and you’ll see several other shrines and small caves before arriving at a sacred spring spouting from the rock face. This supplies a clear pool at the foot of the rocks which is popular with bathing locals. Around the pool are numerous cafes on bamboo stilts although sadly the stilts seem to serve to raise the seating areas above the mounds of rubbish as much as anything else. The cafes serve some decent Thai and local food as well as drinks but they do have a serious refuse problem.',
                'region_id'      => 7,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 15
            DB::table('places')->insert([
                'name'       => 'Kyaut Ka Latt Pagoda',
                'photo'      => '/storage/photo/places/kyaut_ka_latt_pagoda.jpg',
                'description'    => 'Kyauk Ka Lat Pagoda is a rock formation with a golden stupa on the top of the limestone pinnacle. It was is built on a small island in the middle of a lake situated in HPA-AN Township Kayin State, Mynamar. The Pagoda is surrounded by mountains and cultivated land and have a great view of reflections from the surrounding mountain “Zwekabin Mountain”.',
                'region_id'      => 7,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 16
            DB::table('places')->insert([
                'name'       => 'Kan Thar Yar Lake',
                'photo'      => '/storage/photo/places/Kan_Thar_Yar_Lake.jpg',
                'description'    => 'Kan Thar Yar Lake, lying just on the south side of Hpa An, is absolutely an ideal destination for those who are eager to keep away from an urban life that makes you feel suffocated in order to look for a little change of scenery. The peaceful Kan Thar Yar Lake with crystal clear water will definitely make you feel refreshed and vigorous enough to resist any pressure. Especially, at this end of the lake is a nice wooden footbridge with a roofed seating area in the middle. All things make breathtaking scenery like the superb artwork of a master painter. One more fascinating is that tourists can feed the already well-fed resident catfish population as local residents often sell bags of bread at the end of the bridge. A pleasant stroll around town can take you from the central market past the Clock Tower to the lake. Heading south around the lakeside leads you to the pedal boat for hire. It is 500 kyat per person or 1,000 per boat for a 40-minute paddle in a fiberglass duck. A fascinating thing is that a nice lakeshore cafe with strategically placed tables, chairs, cold beers, and extremely delicious and cheap Thai cuisine is run on these hired boats. It is truly an enthralling experience as you can immerse yourself into the fresh air, and peaceful scene while sipping on a cup of coffee alive, vital, potent. Therefore, in order not to miss one of the must-have experiences in Hpa An, it is highly recommended that you book a 4-day Myanmar tour (Yangon – Golden Rock – Hpa An – Bago Tour) right now. We hope to share you distinctive experiences about the mesmerizing landscape.',
                'region_id'      => 7,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        // ------------------------------------------------

        // 4 ( Chin State )

            // 17
            DB::table('places')->insert([
                'name'       => 'Nat Ma Taung',
                'photo'      => '/storage/photo/places/Nat_Ma_Taung.jpeg',
                'description'    => 'Nat Ma Taung (Burmese: နတ်မတောင်; also known as Mount Victoria and Khaw-nu-soum or Khonuamthung in Chin), is the highest mountain in the Chin State of western Burma.[2] Located in 3 Townships - Kanpatlet, Mindat and Matupi, Mount Victoria is part of the Chin Hills range. The park is administered by the Department of Forestry and Environment. With a height of 3,053 metres (10,016 ft) above sea level and a prominence of 2,231 metres (7,320 ft), Nat Ma Taung is one of the ultra prominent peaks of Southeast Asia.',
                'region_id'      => 14,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 18
            DB::table('places')->insert([
                'name'       => 'Rih Dil',
                'photo'      => '/storage/photo/places/rihdil-222.jpg',
                'description'    => '"Rih Dil is the largest lake in Mizoram, but is situated in Myanmar,” goes the common saying. This is an awkward claim to make, but it is a fact due to arbitrary political boundaries. Rih lake is situated at a distance of about two miles from Tiau which is the boundary river between Mizoram (India) and Myanmar, and is within the village area of Rihkhawdar in Myanmar. The village itself is an establishment of adventure that lures the visitor to explore the mysterious and supposedly demon-haunted lake. It is 14 miles from Champhai in Mizoram and 63 miles from Falam, a town of Myanmar. Although there has been no exact measurement taken so far, it is approximately one mile long and half a mile wide with a circumference of about three miles. The south-west floor is supposedly deeper than that of the north-west. The peculiar characteristic of the lake is that it becomes abruptly deep immediately after the water’s edge. The legendary lake is believed to have been the inevitable passage that spirits of the dead crossed on their way to their future abode known as Mitthi Khua. Some even believed it was the final abode of the spirits. The many myths about this mysterious lake have been a source of inspiration for several Mizo writers and composers, and have immensely enriched their literary output. According to legend, there was a girl named Rihi who had a cruel stepmother. One day, the father took Rihi’s younger sister deep into forest and killed her. Rihi eventually found her dead sister and was inconsolable. A good spirit known as Lasi to the Mizos found Rihi weeping and revealed to her the healing powers of a particular magical tree with whose leaf Rihi revived her sister back to life. In order to quench the thirst of her younger sister, Rihi turned herself into a small pool of water with the help of a leaf of the same magical tree. Later, Rihi was compelled to change herself into a white mithun, and wandered around in search of a permanent place where she could be safe. While she was roaming around looking for a safe haven, her urine formed rih note or small lakes wherever she went. It is believed that such lakes can still be found in the Vawmlu Range, Zur forest near the village Natchhawng; a place above Bochung village; the area of Khawthlir village, all of which are in Myanmar. She eventually surveyed Sanzawl village for her permanent settlement not far from which flowed the river “Run”. But the demon spirit of the river threatened to suck her dry if she settled there permanently. It is believed that Rihi then surveyed the valley of Champhai but found that unsuitable too. She finally settled in the present location in the form that she cherished the most – that of a lake. The name Rih retains the name of Rihi.',
                'region_id'      => 14,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // ------------------------------------------------

        // 5 ( Mon State )

            // 19
            DB::table('places')->insert([
                'name'       => 'Kyaiktiyo Pagoda',
                'photo'      => '/storage/photo/places/kyaiktiyo.jpg',
                'description'    => 'Perched dangerously on the edge of a cliff, pilgrims have been visiting the Kyaiktiyo Pagoda for centuries to meditate and give offerings to the Buddha. Whether this worship keeps the boulder from rolling down the precipice is unclear, but the gold-leaf covered stone certainly inspires all who visit. At 25 feet high and 50 feet around, the golden boulder in Mon State, Myanmar is hard to miss.',
                'region_id'      => 14,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 20
            DB::table('places')->insert([
                'name'       => 'Zin Kyaik Waterfall',
                'photo'      => '/storage/photo/places/zin-kyaik-waterfall.jpg',
                'description'    => 'Zin Kyaik(ဇင်းကျိုက်) Waterfalls are located in the main road and rail line of Yangon-Dawei, near by to the Zin Kyaik village. It is panoramic and pleasant for a picnic spot. Near the waterfalls is the holy Zin Kyaik Buddha Hair Relic Pagoda.',
                'region_id'      => 15,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // ------------------------------------------------

        // 6 ( Rakhine State )

            // 21
            DB::table('places')->insert([
                'name'       => 'Ngapali Beach',
                'photo'      => '/storage/photo/places/ngaplibeach.jpg',
                'description'    => 'First of all, if you (like us) are curious to know how the word “Ngapali” is suppose to be said, the locals told us that the “g” is actually silent so it’s pronounced ’Na-pal-li’. Located on the west coast of Myanmar, Ngapali beach is about 300km northwest of Yangon as the crow flies. Ngapali is the most famous seaside resort in Myanmar, but you certainly don’t get that impression on first sight. Meaning that Ngapali is, to the contrary, incredibly peaceful and the beaches are surprisingly quiet for such a well known place. Nightlife and discos aren’t really a big thing here, instead people meet for happy hour on the beach. And since Ngapali is oriented to the west, it makes for the perfect place to marvel at the beautiful sunsets.',
                'region_id'      => 20,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 22
            DB::table('places')->insert([
                'name'       => 'Koe-thaung Temple',
                'photo'      => '/storage/photo/places/koe-thaung-temple-l.jpg',
                'description'    => 'Koe-Thaung translates to “shrine of the 90,000 images of the Buddha”, referring to the number of Buddha images that it contained. The temple was built in 1553 to gain religious merit by King Min Dikkha, the son of Min Bin who built the Shite-Thaung (“temple of the 80,000 images of the Buddha”) three decades earlier. After being abandoned centuries earlier, excavation works started in 1996 and the Koe-Thaung was partly restored. During excavation works several items were found like stone oil lamps, that were used to illuminate the dark interior of the temple. The massive Koe-Thaung temple is built of stone walls and stone terraces and has a maze like interior. Its entrance is on the East side. The temple is surrounded by five receding terraces on which a large number of small stupas stand. At the center of the Koe-Thaung is a large circular bell shaped stupa.',
                'region_id'      => 21,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 23
            DB::table('places')->insert([
                'name'       => 'Andaw-thein Temple',
                'photo'      => '/storage/photo/places/andaw-thein-temple.jpg',
                'description'    => 'The Andaw Thein temple is located at the northwest corner of the Shittaung Temple (pronounced ‘She-thang’). The name means ‘Tooth Shrine’. It contains a tooth relic of the Buddha coming from Sri Lanka. It was first built as an ordination hall between 1515 and 1521 by King Thazata, and restored by Min Bin between 1534 and 1542.It was later expanded into a temple by King Raza II in order to house a tooth relic of the Buddha he brought back from his pilgrimage to Ceylon, either in 1596 or 1606–1607',
                'region_id'      => 21,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 24
            DB::table('places')->insert([
                'name'       => 'Lawka Man Aung Pagoda',
                'photo'      => '/storage/photo/places/Lawka_Man_Aung_Pagoda.jpg',
                'description'    => 'Lawka Man Aung Pagoda is known to be one of the five most revered "Man" paya of Mrauk U. This Pagoda is known to be one of the five most revered pagodas in Mrauk U. The five revered "Man" payas of Mrauk U are Lawka Man Aung. Zeenat Man Aung. Sakkya Man Aung. Mingalar Man Aung and Yadanar Man Aung. In Myanmar known as "Man Ngar Par".
                The architecture of this pagoda is in the form of four steps. The base step is a square shape with four statues at each corner. From the second to the topmost step. there are small pagodas at each corner. Inside the pagoda. there is a 12 feet high Buddha image made of stone.
                In A.D 1676. King Oakka Balar became a monk in this pagoda`s compound and at such a time. was also called Lawkamu Pagoda.  This pagoda was also built by Candathudhammaraza (1652­-1674 A.D) in 1658 A.D. It stands on a flat ground. The shrine was constructed with stone blocks. well hewn and ce­mented. It is square at the base. each side measuring 74 feet; the first four tiers are also square; in the center of each side of the tiers stands a porch containing an image of the Buddha. The sides of the porch are made of stone slabs; the architectural design is similar to that of the Laungbanpyauk Pagoda. There are traces of ornamental designs on the face of the porches. A guinea pig guards each corner of the lowest tier.
                On each corner of the first four tiers stands a small circular pagoda. solid and without niches. From the garbha upward the central spire is circular; the apex is crowned with an iron hti (umbrella) once gilded and still in good order. The east facade of the pagoda has a portal 20` high. protruding 2` from the main wall. a vaulted passage 4` 8" wide. 16` high. and 29` long leads to a chamber in the center of the pagoda. It contains a stone image of the Buddha 12 feet high. sitting cross-legged on a stone alter. The ceiling is a hemispherical dome and the apex is 16 feet above ground. The pagoda has a wall measuring 300 feet around the base and 100 feet high.The old roads to Vesali and Mahamuni begin here. These roads are still known as the gold road and the silver road.',
                'region_id'      => 21,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 25
            DB::table('places')->insert([
                'name'       => 'Ratana-Pon Pagoda',
                'photo'      => '/storage/photo/places/ratana-pon-pagoda-l.jpg',
                'description'    => 'Ratanabon Temple (Burmese: ရတနာပုံဘုရား ra.ta.napuN bhu.ra: [jɛ̀dənàbòʊɴ pʰəjá] Yeṯănap̱ouñ hpăyà; lit. "pile of jewels") is a solid stupa in Mrauk U, Rakhine State, Western Myanmar. The pagoda is located at the northwest corner of the Shite-thaung Temple. According to local legends, it is said to have jewels and images enshrined in the central stupa but none have ever been found. It was built in 1612 by King Min Khamaung and his wife.',
                'region_id'      => 21,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 26
            DB::table('places')->insert([
                'name'       => 'Htukkanthein temple',
                'photo'      => '/storage/photo/places/htukkanthein-temple-l.jpg',
                'description'    => 'The Htukkanthein temple is a bunker like Buddhist temple on a small hill located near the Shite-Thaung temple North of Mrauk U town. The structure has a dark interior and a long spiralling corridor leading to the inner chamber. The temple’s name translates to “cross beam ordination hall”. As the very massive structure is built on raised ground, has small windows and just a single entrance, it is believed that the Htukkanthein served as a place of refuge during times of war.',
                'region_id'      => 21,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        // ------------------------------------------------

        // 7 ( Shan State )

            // 27
            DB::table('places')->insert([
                'name'       => 'Inle Lake',
                'photo'      => '/storage/photo/places/inle_lake_photo_fourth.jpg',
                'description'    => 'The Inle Lake region is one of Myanmar`s most anticipated destinations, and all the hype is justified. Picture a vast, serene lake – 13.5 miles long and 7 miles wide – fringed by marshes and floating gardens, where stilt-house villages and Buddhist temples rise above the water, and Intha fisher folk propel their boats along via their unique technique of leg-rowing. Surrounding the lake are hills that are home to myriad minorities: Shan, Pa-O, Taung Yo, Danu, Kayah and Danaw, who descend from their villages for markets that hopscotch around the towns of the region on a five-day cycle.',
                'region_id'      => 39,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 28
            DB::table('places')->insert([
                'name'       => 'Gokteik Viaduct',
                'photo'      => '/storage/photo/places/Gokteik-viaduct.jpg',
                'description'    => 'The Goteik viaduct (Burmese: ဂုတ်ထိပ်တံတား, also known as Gohteik viaduct) is a railway trestle in Nawnghkio, western Shan State, Myanmar (also known as Burma). The bridge is between the two towns of Pyin Oo Lwin, the summer capital of the former British colonial administrators of Burma, and Lashio, the principal town of northern Shan State. It is the highest bridge in Myanmar and when it was completed, the largest railway trestle in the world. It is located approximately 100 km northeast of Mandalay. The bridge was constructed in 1899 by the Pennsylvania and Maryland Bridge Construction Company, and opened in 1900.[2] The components were made by the Pennsylvania Steel Company and were shipped from the United States. The rail line was constructed to help expand the influence of the British Empire in the region. The construction project was overseen by Sir Arthur Rendel, engineer for the Burma Railway Company.',
                'region_id'      => 39,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 29
            DB::table('places')->insert([
                'name'       => 'Mwe Taw Kakku Pagoda',
                'photo'      => '/storage/photo/places/kakku-pagodas.jpg',
                'description'    => 'Perched dangerously on the edge of a cliff, pilgrims have been visiting the Kyaiktiyo Pagoda for centuries to meditate and give offerings to the Buddha. Whether this worship keeps the boulder from rolling down the precipice is unclear, but the gold-leaf covered stone certainly inspires all who visit. At 25 feet high and 50 feet around, the golden boulder in Mon State, Myanmar is hard to miss.',
                'region_id'      => 39,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 30
            DB::table('places')->insert([
                'name'       => 'Maha Ant Htoo Kan Thar Buddha',
                'photo'      => '/storage/photo/places/MahaAntHtooKanTharBuddha.jpg',
                'description'    => 'Maha Ant Htoo Kan Thar Buddha image is not very old, but famous around Myanmar travel because of its own history. The reason was that three marble Buddha Images sculpted in Mandalay were being transported to their planned destination in China. On this journey, one of the Buddha statues fell down from the truck and could not be reloaded due to its weight. After many attempts, this Image was left behind and the other two were taken on their way. A local Buddhist monk decided he would try faith. He sat for 7 days on this image and preached to the locals and recited teachings of Buddha. After 7 days the image was apparently easily lifted and placed in its current location and the local people built a pagoda as an offering to Buddha.',
                'region_id'      => 39,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 31
            DB::table('places')->insert([
                'name'       => 'Lashio',
                'photo'      => '/storage/photo/places/Lashio.jpg',
                'description'    => 'Lashio is the largest town in northern Shan State, about 200 kilometres (120 miles) northeast of Mandalay. The highest mountain of the Shan Hills, is located 45 km to the southeast of Lashio. Capital of the northern Shan State, major settlement is Shan and Chinese being bordering with Yunan province of China. The famous Burma Road built by the British before the War, interests with Ledo Road leading into the Yunnan province. Myanmar Railways line from Mandalay reached Lashio in 1903. In 1900, the town of Lashio consisted of the European station, with court house and quarters for the civil officers; the military police post and the headquarters of the Lashio. The highlight about this trip is to enjoy the most spectaculars scenic views of the Shan plateau traveling one way by winding road with elbow crossing hilly drive and the other way by train with twisting and turning hilly trek. Crossing over historic Gokehtaik viaduct, which is the highest bridge in Myanmar will be an unforgettable experience. There is a hot spa near Lashio which is always crowded with local pilgrimages to enjoy the nature warmed both of they believe bathing here will purify body and mind. Religious sites include the Sasana (Pyilon Chanta) Pagoda and the Mansu Pagoda. Lashio has been important for border trade between Myanmar and China. It is 190 kilometres (120 miles) from Muse, and is situated midway between Muse and Mandalay. Complete Myanmar travel itineraries always include Lashio to visit.',
                'region_id'      => 28,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 32
            DB::table('places')->insert([
                'name'       => 'Pwe Kauk Waterfall',
                'photo'      => '/storage/photo/places/pwekaukwaterfall.jpg',
                'description'    => 'After visiting around Pyinoolwin, nice place to make fresh before back home is Pwe Kauk Waterfall. The Pwe Kauk Falls is a very pleasant and funny picnic spot in Pyin Oo Lwin where many Myanmar families come for a picnic. Pwe Kauk or B.E waterfalls is also known as Hampshire Falls in British times. It is located on the way to Lashio and not too far from Pyin Oo Lwin town. There are two waterfalls in Pwe Kauk where many people swim or play in the shallow waters. There is a market besides waterfalls where you can buy local products such as wines, strawberry jams, fruits and flowers etc. Pwe Kauk stunned by it`s natural beauty and breathtaking scenery. A one hour hike from the falls there is the natural caves of U Naung Gu where several Buddhas are enshrined.',
                'region_id'      => 39,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 33
            DB::table('places')->insert([
                'name'       => 'Pyinoolwin',
                'photo'      => '/storage/photo/places/Pyinoolwin.jpg',
                'description'    => 'The most famous place in Pyinoolwin is National Kandawgyi Gardens (formerly National Botanical Gardens). It was first founded by Alex Roger, a forest research officer, with the aid of Lady Cuffe, the botanist in 1915. It was modeled after the Kew Gardens of England. The original area of the Botanical Garden was 170 acres of land and 70 acres of water spread totaling 240 acres. In 1917, the government granted it official recognition, and in 1924, the site was declared a Government Botanical Reserve. On 1 December 1942, the Ministry of Forestry designated the Botanical Gardens a "protected forest area". It has been used to promote extensive ecotourism in Myanmar. In 2000, the garden was upgraded to be a recreation garden and renamed it "Kandawgyi National Gardens". The Botanical Gardens has three museums. The fossils museum, the petrified wood museum and the butterfly museum. The gardens are well laid out among lakes and paths, and there are beautiful collection of pond fish and lovely black and white swans. There have an aerial walkway through aviary with hornbills and a variety of other birds as well as the swamp trail. There is a watch tower to climb up which offers a great views over Pyin Oo Lwin and the Shan Hills.',
                'region_id'      => 39,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 34
            DB::table('places')->insert([
                'name'       => 'Peik Chin Myaung Cave',
                'photo'      => '/storage/photo/places/PeikChinMyaungCave .jpg',
                'description'    => 'Peik Chin Myaung Cave (also known as Maha Nandamu Cave) is located on the Lashio road near Wetwun village, 12 miles east of Pyin Oo Lwin town. It is a limestone cave estimated between 230 million and 310 million years old. The cave is called Peik Chin Myaung as plenty of Peik Chin plants used to grow there. The entrance of the Peik Chin Myaung cave is about 20 ft wide and 1,600 ft long. The long cave is filled with so many Buddha images and pagodas in various sizes and position at every corners and niches.',
                'region_id'      => 39,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 35
            DB::table('places')->insert([
                'name'       => 'Blue Color Lagon',
                'photo'      => '/storage/photo/places/bluecolorlagoon.jpg',
                'description'    => 'Finally we moved on and went to the Forest star water fall , in Burmese ( Taw-kyal-waterfall). The waterfall  as well as blue lake have been looked after by the monastery nearby and they try to clean the lanes and make sure tourists are safe. They also offer public toilets for the tourists and travelers. I would like to advice to donate for a few dollars for the monastery if you can. There is a donation box near by. We also saw a few Shan children playing on the way. They are very cute and kept on calling me ” sister”, in Burmese ” Mama”. When I approached them to have a chat, I found out that they don’t speak Burmese . They only know the word ” sister”.',
                'region_id'      => 39,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            

        // ------------------------------------------------

        // 8 ( Ayeyarwady Region )

            // 36
            DB::table('places')->insert([
                'name'       => 'Chaung Tha Beach',
                'photo'      => '/storage/photo/places/chaungthameach.jpg',
                'description'    => 'Of the three main beach resorts on Myanmar’s Bay of Bengal coast, Chaung Tha is the most down to earth, and you can find the largest number of locals on holiday here. The beach lacks the white-sand perfection of Ngapali and Ngwe Saung, but it has several offshore islands to explore and snorkel around, and offers the same delicious range of fresh seafood as its more exclusive rivals (Chaung Tha is the same distance from Yangon by road as Ngwe Saung, and you can travel between the two beaches by motorbike along a coastal track). ',
                'region_id'      => 46,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 37
            DB::table('places')->insert([
                'name'       => 'Ngwe Saung Beach',
                'photo'      => '/storage/photo/places/Lover_island.jpg',
                'description'    => 'Ngwe Saung Beach ,is the closest beach from Yangon accessible by cruises and cars. Situated on the west coast of Myanmar in the Bay of Bengal, Ngwe Sang is lying magnificently and invitingly. One can dissolve in the 4s (the sea, the sun, the sand, the sky) to the fullest. You can see the Delta life on your way to Ngwe Saung as you have to go across the Irrawraddy Delta stretching from the coast of the Bay of Bengal. Feel free in swimming, surfing, snorkeling, and relaxing under the palm trees. One can go around the small fishing villages, and local markets, exploring the countryside by bicycle or enjoying a boat trip to the fantastic offshore islands.',
                'region_id'      => 46,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 38
            DB::table('places')->insert([
                'name'       => 'Gaw Yin Gyi',
                'photo'      => '/storage/photo/places/gawyangyi.jpg',
                'description'    => 'THE MYEIK Archipelago is famous for its wild, uninhabited islands and beaches. For city-dwellers, though, they can seem as distant and unreachable as a foreign land. For those seeking a beautiful, pristine beach without the long-haul travel – and on a minimal budget to boot – an alternative has emerged in Ayeyarwady Region. No doubt you already know of Chaungtha and Ngwe Saung beaches in Pathein Township. About five hours’ drive from Yangon, they have been popular for decades as weekend getaways. But just 50 kilometres south of Ngwe Saung, a largely untouched area known as Gaw Yin Gyi Island is receiving a small but growing number of visitors. Also known as Ngayokekaung – a small town nearby – the beaches here can be reached from Yangon in just six-and-a-half hours by private car. Take the road to Pathein and continue on toward Ngwe Saung, before taking the left-side turnoff to Maw Tin. After 70 kilometres, a new road branches to the right, over a low mountain range. The start of it is tarred, but it soon turns to dirt and dust. Thankfully, it’s only a 20-km trip and you’re in Ngayokekaung, from where Gaw Yin Gyi is just a hop, skip and a jump. Of course you can get to Gaw Yin Gyi by bus, too. There are two options: take the bus from Yangon to Pathein and transfer to one bound for Ngayokekaung, or take a direct service to Gaw Yin Gyi.',
                'region_id'      => 46,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // ------------------------------------------------

        // 9 ( Bago Region )

            // 39
            DB::table('places')->insert([
                'name'       => 'Kanbawzathadi Golden Palace',
                'photo'      => '/storage/photo/places/kanbawzathadi.jpg',
                'description'    => 'Kanbawzathadi Golden Palace in Bago is a reconstruction of the original Royal palace from the second half of the 16th century. The very ornate golden palace gives a good impression of the splendor and wealth of the second Burmese empire. It was rebuilt following the original design, based on knowledge gained from excavations and the original drawings of the building. The huge palace consisted of 76 apartments and halls. The reconstructed palace does not contain much of the original furniture and personal items used by the Royals, as most of it was lost when the palace was looted and destroyed in 1599. There are several reproductions on display, like a replica of the King’s golden coach, decorated with two peacocks and a Pyatthat style roof.',
                'region_id'      => 50,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 40
            DB::table('places')->insert([
                'name'       => 'Kanbawzathadi Golden Palace',
                'photo'      => '/storage/photo/places/kanbawzathadi.jpg',
                'description'    => 'Kanbawzathadi Golden Palace in Bago is a reconstruction of the original Royal palace from the second half of the 16th century. The very ornate golden palace gives a good impression of the splendor and wealth of the second Burmese empire. It was rebuilt following the original design, based on knowledge gained from excavations and the original drawings of the building. The huge palace consisted of 76 apartments and halls. The reconstructed palace does not contain much of the original furniture and personal items used by the Royals, as most of it was lost when the palace was looted and destroyed in 1599. There are several reproductions on display, like a replica of the King’s golden coach, decorated with two peacocks and a Pyatthat style roof.',
                'region_id'      => 50,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 41
            DB::table('places')->insert([
                'name'       => 'Shwemawdaw Pagoda',
                'photo'      => '/storage/photo/places/Shwemawdaw-Pagoda.jpg',
                'description'    => 'The Shwemawdaw Paya in Bago is the tallest pagoda in Burma. With its height of 114 meters it is 15 meters taller than the Shwedagon Pagoda in nearby Yangon. The impressive Shwemawdaw, which translates to “Great Golden God” was built by the Mon people over a thousand years ago. It is one of Burma’s most sacred sites, because it enshrines several relics of the Buddha. The towering pagoda glittering in the sun can be seen from miles around. The grounds are peaceful and not much visited by tourists. Over the centuries, the pagoda has been rebuilt and enlarged several times, as a result of the destruction caused by earthquakes. Two huge Chinthe, mythological animals that look like a lion stand guard at the entrance of the temple grounds. Numerous small pagodas are placed at the base of the 114 meter tall Shwemawdaw. The pagoda is topped with a diamond studded hti, a top ornament shaped as an umbrella found on most Burmese temples.',
                'region_id'      => 50,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 42
            DB::table('places')->insert([
                'name'       => 'Shwesandaw Pagoda',
                'photo'      => '/storage/photo/places/shwesandaw.jpg',
                'description'    => 'The Shwesandaw Pagoda, or Shwesandaw Paya (Burmese: ရွှေဆံတော်ဘုရား, pronounced [ʃwè sʰàɴdɔ̀ pʰəjá]) is a Buddhist pagoda in the center of Pyay, Burma. It is one of the more important Buddhist pilgrimage locations in Burma. It is said to contain a couple of the Buddha`s hairs, as its name means Golden Hair Relic. During the full moon day of Tabodwe, Shwesandaw Pagoda holds a miphon pwe (မီးဖုန်းပွဲ), whereby worshippers light bonfires using Sesbania cannabina as tinder.',
                'region_id'      => 50,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // ------------------------------------------------

        // 10 ( Magway Region )

            // 43
            DB::table('places')->insert([
                'name'       => 'Shwe Ku Pagoda',
                'photo'      => '/storage/photo/places/shweku.jpg',
                'description'    => 'Shwe Ku Pagoda is located in Pakokku. Add Shwe Ku Pagoda to your Pakokku travel itinerary, and discover new vacation ideas by using our Pakokku trip itinerary maker.',
                'region_id'      => 57,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 44
            DB::table('places')->insert([
                'name'       => 'Magwe Myathalun Pagoda',
                'photo'      => '/storage/photo/places/Magwway_Myathalun_Pagoda.jpg',
                'description'    => 'Steaming into Magwe, the riverine traveller is greeted by the sight of the Myathalun Pagoda glinting serenely from the summit of the Naguttama hillock hard by the bank of the Ayeyarwaddy River. Being one of the greatly venerated shrines, and also because Magwe lies midway between the upcountry and the lower parts, its annual festival has served as a great fair for the exchange of local goods. According to legend the original pagoda had a height of about 55.5 feet (16.9 m) and was built by U Baw Gyaw and his wife the daughter of a certain Maha Bawga, a man of great wealth with an official title. King Saw Lu (1077-1084) of Bagan encapsulated the original pagoda and raised it to a height of 87 feet (26.5 m). In 1847, it was destroyed by an earthquake and rebuilt by the mayor of the town Min Din Min Hla Kyaw Gaung. The pagoda was rebuilt to the present height of approximately 104 feet (31.7m).',
                'region_id'      => 55,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 45
            DB::table('places')->insert([
                'name'       => 'Kyaung Taw Yar Pagoda',
                'photo'      => '/storage/photo/places/KyaungTawYarPagoda.jpg',
                'description'    => 'Kyaung Taw Yar Pagoda - ေက်ာင္းေတာ္ရာဘုရား One of the famous pagodas in Myanmar Kyaung Taw Yar, Pwinbyu Township, Minbu District, Magway Region, Myanmar. Legend tells us Kyaung Dawyar was visited by the Lord Gautama Buddha himself. He is said to have stayed at Kyaung Dawyar for a week teaching the local people he found there about his lives and Dhamma (Buddhist teachings). The pagoda standing on the banks of the Mon River was built in the memory of His stay. On His return journey to northern India, he stopped at Shwesetdaw on the bank of the Man river in the domain of the ruthless hunter Bandaka. Bandaka is said to have listened to the lectures of the Buddha and become a monk, and requested that the Buddha leave his footprint to remind people of his passing, and as a gift for the King of Naga. Kyaung Dawyar pagoda is visited not only by the human pilgrims, but also by fish pilgrims! The giant river catfishes appear in the Mone creek during the Buddhist`s lent - July to September - for 3 months. People believe that the fishes come to pay homage to the Buddha. They appear on the full moon day of Waso (4th month of Myanmar calendar) and disappear after the full moon day of Thidinkyut (the 7th month of the Myanmar calendar). Human pilgrims feed them the pop-corn, rice cake and dried bread.',
                'region_id'      => 57,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // ------------------------------------------------

        // 11 ( Mandalay Region )

            // 43
            DB::table('places')->insert([
                'name'       => 'Mahamuni Pagoda',
                'photo'      => '/storage/photo/places/Mahamuni.jpg',
                'description'    => 'he Mahamuni Pagoda or Mahamuni Buddha temple is one of the most important Buddhist pilgrimage sites in Burma, an important pilgrimage site that houses one of the most revered Buddha images, a 13-foot tall sculpture. It’s covered in gold leaves so much so that parts of the sculpture appear distorted. The temple complex is also home to the Mahamuni Museum that educates visitors on Buddha’s life. There are also shops selling offerings in case you come without. The Mahamuni museum on the temple grounds tells about the history of Buddhism. The museum displays information about the various places in the life of the Buddha, from His birth place in Nepal, the site where He reached enlightenment and the site of His passing into final Nirvana. There are also maps that explain about the spread of Buddhism across Asia during the last 25 centuries. The Mahamuni, which means the Great Image is seated on a very ornate 1.80 meters high pedestal. The image in the Bhumisparsha Mudra posture is 3.80 meters high and weighs about 6½ tons. Every morning at around 4 am the Buddha image ritual is performed. Witnessed by a great number of Buddhist devotees, the men up front, the women behind a rope, a very senior monk of the Mahamuni temple assisted by a number of helpers washes the face of the images and brushes the teeth. The ritual is performed in great detail and takes considerable time. The Mahamuni Pagoda is located between 82nd street and 84th street. Best way to get there is by private taxi or rickshaw. The temple grounds are open daily from 6 am until 8 pm. Entrance fee is US$ 4 (price may change) per person.',
                'region_id'      => 60,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 44
            DB::table('places')->insert([
                'name'       => 'Mandalay Palace',
                'photo'      => '/storage/photo/places/dsc-1369-largejpg.jpg',
                'description'    => 'The Mandalay Palace (Burmese: မန္တလေး နန်းတော်, pronounced [máɴdəlé náɴdɔ̀]), located in Mandalay, Myanmar, is the last royal palace of the last Burmese monarchy. The palace was constructed between 1857 and 1859 as part of King Mindon`s founding of the new royal capital city of Mandalay. The plan of Mandalay Palace largely follows the traditional Burmese palace design, inside a walled fort surrounded by a moat. The palace itself is at the centre of the citadel and faces east. All buildings of the palace are of one storey in height. The number of spires above a building indicated the importance of the area below. Mandalay Palace was the primary royal residence of King Mindon and King Thibaw, the last two kings of the country. The complex ceased to be a royal residence and seat of government on 28 November 1885 when, during the Third Anglo-Burmese War, troops of the Burma Field Force entered the palace and captured the royal family. The British turned the palace compound into Fort Dufferin, named after the then viceroy of India. Throughout the British colonial era, the palace was seen by the Burmese as the primary symbol of sovereignty and identity. Much of the palace compound was destroyed during World War II by allied bombing; only the royal mint and the watch tower survived. A replica of the palace was rebuilt in the 1990s with some modern materials.',
                'region_id'      => 60,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 45
            DB::table('places')->insert([
                'name'       => 'Bagan',
                'photo'      => '/storage/photo/places/bagan.jpg',
                'description'    => 'Bagan, an ancient city located in the Mandalay region is one of the most visited places by tourists in the country. The city served as the capital of Myanmar from the 9th to 13th centuries. It was the capital of the Pagan kingdom, the kingdom which unified regions that constitute the Myanmar of today. The Bagan Archaeological Zone is the main attraction of the country and is one of the richest archaeological sites in Southeast Asia. Situated on the eastern bank of the Ayeyarwady River, the temples of Bagan leaves one awestruck. Bagan has approximately 2000 ancient monuments and pagodas strewn all over Bagan. The monuments are located on the land between the river bank and the Turintaung range. Although Bagan is most famous for its historic monuments, it has a lot more to offer. Tourists can visit nearby local villages and watch people weaving cotton. Bagan is famous for ancient craft, especially in lacquer. It is also famous for its mural painting, oil processing and palm sugar production.',
                'region_id'      => 60,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 46
            DB::table('places')->insert([
                'name'       => 'U Bein Bridge',
                'photo'      => '/storage/photo/places/u-leg-bridge-1370430_1920.jpg',
                'description'    => 'Experience sunset at U Bein Bridge on a 6-hour cycling tour through Mandalay’s back roads and lively neighborhoods. Pedal along ancient canals that support the city’s agriculture, ride through rural villages and fertile farmland, and trace the atmospheric paths across the ancient imperial capital of Ava. Step onto the elegant U Bein Bridge, and watch Myanmar’s evening sun illuminate the .75-mile (1.2-kilometer), teakwood span. Enjoy a day away from the hustle and bustle of the city Led by a local guide Step back in time on a history tour Small-group tour Snacks and Beverages included',
                'region_id'      => 60,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 47
            DB::table('places')->insert([
                'name'       => 'Kuthodaw Pagoda',
                'photo'      => '/storage/photo/places/kuthodaw3.jpg',
                'description'    => 'Kyauktawgyi Pagoda, the pagoda of the “Great Marble Image,” is sited near the southern entry to Mandalay Hill. Although its construction was started in 1853 by King Mindon, it was not completed until 1878, in part due to a palace rebellion and domestic disturbances in the mid-1860s. The chief feature of the Kyauktawgyi Paya is huge seated Buddha figure sculpted from a single block of pale green marble from the Sagyin quarry twelve miles north of Mandalay.',
                'region_id'      => 60,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 48
            DB::table('places')->insert([
                'name'       => 'Mandalay Hill',
                'photo'      => '/storage/photo/places/mandalay-1379.jpg',
                'description'    => 'Mandalay Hill (Burmese: မန္တလေးတောင်; MLCTS: manta. le: taung [màɴdəlé tàʊɴ]) is a 240 metres (790 ft) hill that is located to the northeast of the city centre of Mandalay in Myanmar. The city took its name from the hill. Mandalay Hill is known for its abundance of pagodas and monasteries, and has been a major pilgrimage site for Burmese Buddhists for nearly two centuries. At the top of the hill is the Sutaungpyei (literally wish-fulfilling) Pagoda. A panoramic view of Mandalay from the top of Mandalay Hill alone makes it worthwhile to attempt a climb up its stairways. There are four covered stairways called saungdan leading up the hill from the south, southeast, west and north, and convenient seats of masonry work line these stairways all the way up. A one-way motor road today saves time and also makes it accessible for those who are unable to climb up the stairs, leading to an escalator and a lift to the pagoda at the summit.',
                'region_id'      => 60,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 49
            DB::table('places')->insert([
                'name'       => 'Shwenandaw Monastery',
                'photo'      => '/storage/photo/places/shwenandaw-monastery-l.jpg',
                'description'    => 'The Shwenandaw Monastery is one of the finest examples of traditional 19th century wooden monastery building in the country. The monastery that is also known as he Shwenandaw Kyaung is a very finely carved teak wooden monastery building just outside the Mandalay Royal Palace, on the same grounds as the Atumashi Monastery. The monastery is also called the Golden Palace Monastery, because it used to be part of the Mandalay Royal Palace and was completely gilded. Both exterior and interior of the monastery are decorated with intricate wood carvings. The Shwenandaw Monastery was originally part of the Royal Palace in Amarapura. When the capital city was moved to Mandalay, the building was dismantled, transported to Mandalay and rebuild there as part of the new all teak Royal Palace in 1857. King Mindon used the building as his personal living quarters. After the King died, his son relocated the building to its current location outside of the Palace grounds, where it was converted into a monastery in 1880. The Golden Palace Monastery is a great place to get an impression of what the Royal Palace once must have looked like. As the Palace was destroyed by fire during the second World War, the Shwenandaw Monastery is the only major original teak wooden building left of the original Mandalay Royal Palace.',
                'region_id'      => 60,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 50
            DB::table('places')->insert([
                'name'       => 'Werawsana Jade Pagoda',
                'photo'      => '/storage/photo/places/jadepagoda.jpg',
                'description'    => 'From atop its square base within a thicket of gardens, the Werawsana Jade Pagoda towers alongside an expressway. It’s hard to miss the kaleidoscope of gemstones that gleams from its every inch. The entire pagoda is made from jade. According to Myanmar’s government, it’s the first pagoda in the world constructed solely from the precious stone. It’s a fitting choice of gemstone, as Myanmar produces almost 70 percent of the world’s supply of jadeite, a type of jade. Work on the monumental structure began in 2012 and didn’t finish until 2015. Even before construction started, a jewelry trader named U Soe Naing spent about 25 years collecting and stockpiling all the jade. He had to gather over 11,000 tons of the stones to build the pagoda. A series of chambers for praying and making merit ring the roughly 75-foot-tall structure. The exterior walls are inlaid with arrays of carved amulets, sculpted leaves, and inscriptions. There are also carved jade footprints of Buddha, where devotees and pilgrims can leave monetary donations. In combination with the Jade Market in Mandalay, this is really the best place to see excellent examples of the stone used within the context of Buddhism. This site is a must-see on the itinerary of gem enthusiasts. Friends will turn jade-green with envy when they see your gleaming snaps.',
                'region_id'      => 59,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 51
            DB::table('places')->insert([
                'name'       => 'Inwa Pagoda',
                'photo'      => '/storage/photo/places/inwa.jpg',
                'description'    => 'For a total of 360 years spread over the course of five centuries, Inwa was the capital of successive Burmese kingdoms. Then, in 1839, it was leveled by earthquakes and subsequently abandoned. The wheel of fortune turns on us all, human and city alike. Inwa — also spelled Innwa, known in classical Pali as Ratanapura (“City of Gems”), and known locally as Awa or Ava — was originally founded in 1365. Located at the confluence of the Irrawaddy and Myitnge Rivers on an artificial island formed by a canal connecting the two rivers upstream from their natural point of meeting, Inwa was built to be the capital of a newly unified kingdom that came to be known, appropriately enough, as the Kingdom of Ava. And so it remained for 190 years, serving not only as the seat of power in Upper Burma, but also as the center of a flourishing period of Burmese literature. In 1555 the Kingdom of Ava fell. However, the city of Inwa and its political prestige lived on, serving as the capital of all of Burma from 1599 to 1613, then again from 1635 to 1752, then again from 1765 to 1783. Then again from 1821 to 1842. The aforementioned series of devastating earthquakes struck on March 22, 1839; the entire region was affected, but the capital was hit particularly hard. Although Inwa had been sacked, destroyed, and rebuilt several times over its long history, this time it would not be so. The city was not rebuilt, the capital was officially moved to Amarapura on February 10, 1842, and Inwa was left to the elements. The former imperial city is now a rural area where livestock graze and farmers raise crops amidst the remains of pagodas, palace towers, monasteries, and massive city walls that once formed the outline of a seated lion. One of the monasteries — Bagaya Kyaung, a towering structure built entirely of teak — is still in use as a monastery and school today. Local guides provide tours of the site via horse-drawn carts.',
                'region_id'      => 59,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // ------------------------------------------------

        // 12 ( Sagaing Region )

            // 52
            DB::table('places')->insert([
                'name'       => 'Kaunghmudaw Pagoda',
                'photo'      => '/storage/photo/places/kaunghmudaw-pagoda.jpg',
                'description'    => 'The Kaunghmudaw Pagoda (Burmese: ကောင်းမှုတော် ဘုရား [káʊɴ m̥ṵ dɔ́ pʰəjá]; Yaza Mani Sula Kaunghmudaw (ရာဇမဏိစူဠာ ကောင်းမှုတော်); Pali: Rājamaṇicūḷā) is a large pagoda on the northwestern outskirts of Sagaing in central Myanmar (Burma). Modeled after the Ruwanwelisaya pagoda of Sri Lanka,[1] the Kaunghmudaw is known for its egg-shaped design, which stands out among more traditional-style, pyramid-shaped Burmese pagodas. The stupa`s formal name Yaza Mani Sula signifies the enshrinement of Buddhist relics inside its relic chamber. But it is commonly known by its popular name, Kaunghmudaw (lit. "Royal Merit-Making"). It is an important pilgrimage and tourist destination in the Sagaing area.',
                'region_id'      => 72,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 53
            DB::table('places')->insert([
                'name'       => 'Sagaing Hill',
                'photo'      => '/storage/photo/places/nur-eine-pagodenlandschaft.jpg',
                'description'    => 'Sagaing is located just 12 miles from Mandalay and can be reached by crossing the long Sagaing Bridge over the Irrawaddy River. The city is a frequent tourist destination for day trips. Many people who visit Mandalay will also make a trip across the Irrawaddy River to the town of Sagaing. It known as the Centre of Buddhism in Myanmar and it has more than 300 religious buildings. It is a beautiful and peaceful place with lush, tree-covered hills but most tourists only make a quick visit spending 2 or 3 hours exploring two or three main sites. Sagaing was the capital of Sagaing Kingdom (1315-1364), and one of the minor kingdoms that rose up after the fall of Bagan Dynasty. Today, the city is part of Mandalay area with more than 1,022,000 inhabitants (2011 estimate). One of the most popular tourist attractions on Sagaing Hills is Soon U Ponya Shin pagoda. It is connected by a set of covered staircase that runs up the 240 meters hill and is one of the oldest temples on Sagaing Hills. It was built in 1312 by Minister Pon Nya. A Pagoda Festival is held on Full Moon Day of Warso, the fourth month of Myanmar Calendar, which falls in July of each year. Kaungmudaw Pagoda, also called Yaza Mani Sula, is a huge pagoda 10 km beyond the town of Sagaing. It was built by the King Tha Lun and his son in 1636AD. The dome shaped pagoda rises up to 46 meters. At the base of the pagoda, there are 812 stone pillars, each one with a hollow and an image of a Nat (means Angel) in it. The stupa enshrined the Buddhist relics inside its relic’s chamber. It is one of the famous pilgrimage and tourist destinations in the Sagaing area. Shin Phyu Shin Hla Pagoda was built by the King Mani Sithu in AD 1095. It is named for the fact that two images of the Buddha, called Shin Phyu and Shin Hla respectively, were interned in the pagoda by King Mani Sithu. Umin Thonse` Pagoda, also known as 30 Caves Pagoda, is situated on Sagaing Hills. It was built by a venerable monk named Padugyi Thangayaza (though the date has been variously given as A.D. 687, 1005,1050, and 1085. 45 Buddha images sit in a crescent-shaped colonnade within the pagoda. Yadanar Zaedi Sinmyar Shin pagoda is situated on the Shwebo-Monywa road in Sagaing. It was built by King Mohnyin of Inwa in AD 792, enshrining the five relics brought by two monks who came back from Sri Lanka. Tilawkaguru Cave monastery is one of the monasteries on the Sagaing Hills. It was a series of meditation caves built around 1672. Bright reds, yellows, blues but especially turquoise, which produced richer more vivid mural paintings, still can be seen in the Tilawkaguru Meditation Caves. Sagaing Division is famous for its arts, crafts and silver products. If you are looking for a some silver souvenir, there are many silver ware workshops along the Sagaing – Monywa highway road in Ywa Htaung Village, where they make various kind of silverware such as jewelries, bowls, trays, boxes and Buddha images. You can take photos with great views of Sagaing Hills and surroundings, when you cross back over the Irrawaddy River to Mandalay. Have a fantastic day out and always remember that one of the best new hidden places in Myanmar. ',
                'region_id'      => 72,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 54
            DB::table('places')->insert([
                'name'       => 'Monywa Town',
                'photo'      => '/storage/photo/places/Monywa-Town.jpg',
                'description'    => 'In Monywa town. there are busy markets. popular restuarants. a Degree College affiliated to Mandalay University. a Technical High School. and soon there will be an Institute of Economics. the second after the one in Yangon. Monywa Hotel. now privatised has comfortable four-room bungalows with attached amenities all air-conditioned centr, second only to Mandalay in the Upper Myanmar region. If you are travel to Monywa by car you should stop about 20 kilometres before you reach the town to visit this most unusual Buddhist temple complex on 37 acres of land which is part of the Mohnyin Forest Monastery retreat. The pagoda was started on 20th June 1939 and completed on 2nd March 1952.It was the brain-child of the famous Mohnyin Sayadaw whose life-like effigy can be seen nearby. If you can go at the beginning of the Myanmar month of Tazaungmone ( usually around November). you can see the annual pagoda festival. which goes on for several days when the villagers from all around come to enjoy the music and dancing and buy from the various stalls set up by sellers from all over the country.',
                'region_id'      => 71,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // ------------------------------------------------

        // 13 ( Tanintharyi Region )

            // 55
            DB::table('places')->insert([
                'name'       => 'Nyaung Oo Phee Island',
                'photo'      => '/storage/photo/places/NyaungOo.jpg',
                'description'    => 'Victoria Cliff Resort Nyaung Oo Phee Island features a restaurant, bar, a shared lounge and garden in Kawthaung. Among the facilities at this property are room service and a concierge service, along with free WiFi throughout the property. The resort has an outdoor swimming pool, fitness center, evening entertainment and a 24-hour front desk. Guest rooms at the resort come with a seating area. Victoria Cliff Resort Nyaung Oo Phee Island has some accommodations that have a patio and lake view, and the rooms include a private bathroom and a desk. All rooms at the accommodation feature air conditioning and a closet. Guests at Victoria Cliff Resort Nyaung Oo Phee Island can enjoy a continental or a buffet breakfast. The resort has a playground. The area is popular for snorkeling, and car rental is available at Victoria Cliff Resort Nyaung Oo Phee Island.',
                'region_id'      => 60,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 56
            DB::table('places')->insert([
                'name'       => 'COCKS COMB ISLAND',
                'photo'      => '/storage/photo/places/02.jpg',
                'description'    => 'Cocks Comb Island is part of the Mergui Archipelago in the Andaman Sea. It is situated just off the coast of Kawthaung (Kawthoung), the most Southern city of Myanmar (Burma). The island is a limestone atoll without a beach, but with a stunning lagoon, shape like a heart. The inlet changes the color of the ocean and that’s why it is also called Emerald Heart Island. In the morning we leave from Kawthaung. Enjoy the fresh breeze on the ocean while cruising along scenic islands. Our first stop is Horse Shoe Island. It became the name because it is actually formed like a horse shoe. After some snorkeling we proceed to Cocks Comb Island and enter the Emeralds Heart by swimming through a natural tunnel (guided). The sea inside the inlet is calm and perfect for snorkeling. Our third stop will be Dunkin Island also called Say Tan Kyun. We enjoy buffet lunch on a paradise beach. The fine white sand is a perfect place for beach holiday photos. Feel free to take a stroll along the beach and listen to the sound of the ocean and jungle. We continue towards St. Matthews Island better known under its Burmese name Zar Det Gyi Kyun. Here we find another great place for snorkeling. We might spot, turtles, clown fish (nemo), sea anemones, giant clams and rock lobster (crayfish). We will return in the late afternoon back to Kawthaung for showers and buffet dinner.',
                'region_id'      => 60,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 57
            DB::table('places')->insert([
                'name'       => 'Macleod Island',
                'photo'      => '/storage/photo/places/064A9032.jpg',
                'description'    => 'Macleod Island is home to Myanmar Andaman Resort, a private island retreat located in Myanmar’s Mergui Archipelago. Myanmar Andaman Resort is one of only two operating resorts among 800 mostly uninhabited islands. With twenty-two bungalows facing the island’s bay and surrounding pristine white sand beaches, Myanmar Andaman Resort offers every guest an unforgettable private island experience. Myanmar Andaman Resort provides a unique chance for guests to see native tribes, untouched tropical forests and a wealth of wildlife. Highlights include a variety of outdoor activities including CMAS certified dive center, snorkeling, island hopping tours, sea kayaking, hiking the island’s peak, swimming in the bay and traditional massage to bring an adventurous day to a close.',
                'region_id'      => 60,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 58
            DB::table('places')->insert([
                'name'       => 'Macleod Island',
                'photo'      => '/storage/photo/places/tour.tour_gallery.1094.jpg',
                'description'    => 'The newly found heaven in Myanmar waters is waiting for everyone to explore its beauty. Our car picks you up at a hotel (in Ranong city) at around 7am to complete a border pass (identification is required). Then we travel to the Cockburn Island to snorkel along a long line of coral reefs, which is considered the most abundant among all Myanmar’s islands. It’s also a chance to experience the “divided sea” and its smooth white sandbar. Next, we snorkel at the Milky Way spot to see fascinating coral reefs and sea anemones up close. We stop by at “Pak Khlong Talad” or underwater flower garden before having lunch buffet and fresh seafood on the island. That’s not it. Keep moving to the hill’s peak and see a beautiful panoramic view. You cannot find these activities from any other programs. Then we return to Kawthaung for a border pass by 5pm, before traveling back to Ranong city. Note: This program is available every day from October 15 through May 15. The activity is suspended from May 16 through October every year due to the national park’s closure.',
                'region_id'      => 60,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // ------------------------------------------------

        // 14 ( Yangon Region )

            // 59
            DB::table('places')->insert([
                'name'       => 'Shwe Dagon Pagoda',
                'photo'      => '/storage/photo/places/shwedagon.jpg',
                'description'    => 'The Shwedagon Pagoda (Burmese: ရွှေတိဂုံဘုရား, IPA: [ʃwèdəɡòʊɴ pʰəjá]), officially named Shwedagon Zedi Daw (Burmese: ရွှေတိဂုံစေတီတော်, [ʃwèdəɡòʊɴ zèdìdɔ̀], lit. `Golden Dagon Pagoda`) and also known as the Great Dagon Pagoda and the Golden Pagoda, is a gilded stupa located in Yangon, Myanmar. The 326-foot-tall (99 m)[1] pagoda is situated on Singuttara Hill, to the west of Kandawgyi Lake, and dominates the Yangon skyline. Shwedagon Pagoda is the most sacred Buddhist pagoda in Myanmar, as it is believed to contain relics of the four previous Buddhas of the present kalpa. These relics include the staff of Kakusandha, the water filter of Koṇāgamana, a piece of the robe of Kassapa, and eight strands of hair from the head of Gautama.',
                'region_id'      => 79,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 60
            DB::table('places')->insert([
                'name'       => 'Kandawgyi',
                'photo'      => '/storage/photo/places/kandawgyi.jpg',
                'description'    => 'Kandawgyi Lake (Burmese: ကန်တော်ကြီး pronounced [kàndɔ̀dʑí]; literally "great royal lake", formerly Royal Lake), is one of two major lakes in Yangon, Burma (Myanmar). Located east of the Shwedagon Pagoda, the lake is artificial; water from Inya Lake is channelled through a series of pipes to Kandawgyi Lake. It was created to provide a clean water supply to the city during the British colonial administration.[1][2] It is approximately 5 miles (8 km) in circumference, and has a depth of 20 to 45 inches (50 to 115 cm). The 150-acre (61 ha) lake is surrounded by the 110-acre (45 ha) Kandawgyi Nature Park,[4] and the 69.25-acre (28-hectare) Yangon Zoological Gardens, which consists of a zoo, an aquarium and an amusement park.',
                'region_id'      => 79,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 61
            DB::table('places')->insert([
                'name'       => 'Sule Paya',
                'photo'      => '/storage/photo/places/sulepaya.jpg',
                'description'    => 'Not many cities have a primary traffic circle occupied by a 2200-year-old golden temple. This 46m zedi (stupa), said to be older than Shwedagon Paya, is an example of modern Asian business life melding with ancient Burmese tradition. The gilded zedi is unusual in that its octagonal shape continues right up to the bell and inverted bowl. Just after the sun has gone down is the most atmospheric time to visit the temple. The central stupa’s name, Kyaik Athok, translates in the Mon language as ‘the stupa where a Sacred Hair Relic is enshrined’. As with many other ancient Myanmar shrines, it has been rebuilt and repaired many times over the centuries. Near the north entrance look for the small golden karaweik (royal barge designed in the shape of a mythical bird), which you can load with a prayer card, then winch up a chain in order to deposit the card in a shrine higher up the stupa (K1000). The exterior base of the temple is surrounded by small shops and all the nonreligious activities that seem to be part of every zedi in Myanmar. Besides its significance as a landmark and meeting place, maybe its most mundane function is as the point from which all addresses to the north are measured.',
                'region_id'      => 79,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 62
            DB::table('places')->insert([
                'name'       => 'Botataung Pagoda',
                'photo'      => '/storage/photo/places/Botataung.jpg',
                'description'    => 'The Botataung Pagoda on the banks of the river in downtown Yangon is one of the city’s most highly revered temples. The 40 meter high golden pagoda enshrines a sacred hair relic of the Buddha. The Botataung Pagoda, also spelled Botahtaung Pagoda was built some 2,500 years ago by the Mon people. In the second World War the pagoda was destroyed during an airforce bombing mission aimed at the nearby docks. Rebuilding started in 1948 following the original design. In the center of the tiled platform stands the main stupa surrounded by a a number of smaller stupas. The main stupa is the unique feature of the Botataung monastery; it enshrines the sacred Buddha relic and it is hollow and open to the public. Seated on a high pedestal in a very ornate pavilion is the Royal Palace Bronze Buddha image. The image that was cast in 1859 by order of King Mindon was taken to Britain during the colonial years and returned to Burma a few years after gaining independence.',
                'region_id'      => 79,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 63
            DB::table('places')->insert([
                'name'       => 'Kyauk Taw Gyi Pagoda',
                'photo'      => '/storage/photo/places/kyauk-taw-gyi-pagoda-yangon-l.jpg',
                'description'    => 'The Kyauk Taw Gyi pagoda on top of Mindhama Hill near Yangon airport is known for its enormous Buddha image made out of a single piece of white marble. At the bottom of the stairs to the temple’s entrance are the ferocious looking heads of giant Naga, a serpent from Buddhist and Hindu mythology. The snakes bodies extend on the balustrades. At the stop of the stairway is a pair of giant white and gold Chinthe, lions often seen guarding Burmese temples. A long corridor with multi tiered Pyatthat roofs leads to the hall enshrining the marble Buddha image. Along the way devotees can buy flowers to pay homage.',
                'region_id'      => 79,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 64
            DB::table('places')->insert([
                'name'       => 'Nga Htat Gyi Pagoda',
                'photo'      => '/storage/photo/places/nga-htat-gyi-pagoda-l.jpg',
                'description'    => 'The Nga Htat Gyi pagoda in Yangon is known for its enormous seated image of the Buddha. The pagoda is located in the Ashay Tawya Monastery, a little visited temple across the street from the Chauk Htat Gyi pagoda that houses a highly revered 65 meter long reclining Buddha image. A flight of stairs leads to the temple grounds. A gate with a very ornately decorated five tiered Burmese Pyatthat roof, topped with a hti is guarded by two large white and gold mythological lions called Chinthe.',
                'region_id'      => 79,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // ------------------------------------------------

        // 15 ( Naypyidaw Union Territory )

            // 65
            DB::table('places')->insert([
                'name'       => 'Uppatasanti Pagoda',
                'photo'      => '/storage/photo/places/42021597915_72ef96d8c0_h.jpg',
                'description'    => 'Uppātasanti Pagoda (ဥပ္ပါတသန္တိစေတီတော်, officially called ဥပ္ပါတသန္တိစေတီတော်မြတ်ကြီး, also called the "Peace Pagoda") is a prominent landmark in Naypyidaw, the capital of Myanmar. The pagoda houses a Buddha tooth relic from China.[1] It is nearly a same-sized replica of Shwedagon Pagoda in Yangon and stands 99 metres (325 ft) tall.',
                'region_id'      => 80,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 66
            DB::table('places')->insert([
                'name'       => 'Thatta Thattaha Maha Bawdi Pagoda',
                'photo'      => '/storage/photo/places/thatta-thattaha-maha-bawdi.jpg',
                'description'    => 'Thatta Thattaha Maha Bawdi Pagoda (Burmese: သတ္တသတ္တာဟ မဟာဗောဓိစေတီတော်; Pali: Sattasattāhamahābodhi Cetiya) is a Buddhist temple on Udayaraṃsi hillock in Pobbathiri Township, Naypyidaw Union Territory, Myanmar (Burma). The pagoda is a replica of the Mahabodhi Temple in Bodh Gaya, Bihar, India.[1] The replica is 162 feet (49 m) tall. The buddhābhiṣeka ritual of the pagoda`s main Buddha image was held on 13 May 2014.The complex also houses replicas of key locations in Gautama Buddha`s life (သံဝေဇနိယလေးဌာန), including his birth, his enlightenment, his preaching and his death, built for worshippers who have difficulties making a pilgrimage to Bodh Gaya.',
                'region_id'      => 80,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 67
            DB::table('places')->insert([
                'name'       => 'Water Fountain Garden',
                'photo'      => '/storage/photo/places/4-2.jpg',
                'description'    => 'More or less at the heart of Nay Pyi Taw is this government-built, 165-acre grassy park boasting ponds, swinging bridges, gardens, fountains, kitschy sculptures, a playground and a massive, not always functioning water slide. The gurgling, colourfully lit fountains are usually turned on at around dusk and add to the allure alongside the twinkling fairy lights festooning the (ageing) structures scattered around the grounds. The best time to come is in the evening. Locals flock here for picnics (and quite a bit of drinking) and loud music plays through speakers hidden in the trees. As the evening (and alcohol) wears on, many people start dancing in the square in front of the main fountains. It`s a bizarre but fun spectacle.',
                'region_id'      => 80,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // ------------------------------------------------
    
            
    }
}
