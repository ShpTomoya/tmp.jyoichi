<?php

$category = array(
	'basicskincare' => array(
		'series_name_title' => 'TAOYAKA基礎化粧品',
		'mainvisual_text_headline' => 'たおやか',
		'mainvisual_text' => 'やわらかく<br>しなやかに<br>やさしいさま',
		'series_name_html' => 'TAOYAKA基礎化粧品',
		'series_description' => '
			肌の健康にとって重要な役割を果たしている皮脂に限りなく近い天然由来のシンプルな成分を使用しています。<br><br>
			スキンミルク（乳液）やモイスチャークリームは皮膚の健康維持に重要な役割を果たしている<br class="display-pc">
			皮脂に限りなく近い植物(アズレンなどの成分)・海洋生物(スクアラン)などの成分などの天然由来のシンプルな成分のみ用いて作られています。<br><br>
			そのため、違和感なく肌への馴染みがいいことが特徴です。
		'
	),

	'japanese' => array(
		'series_name_title' => 'にほんこらいのちえ',
		'mainvisual_text_headline' => 'にほんこらいのちえ',
		'mainvisual_text' => 'こんぶとふのり<br>あずき<br>ぬかとふくろ',
		'series_name_html' => '美容商材',
		'series_description' => ''
	),

	'tea' => array(
		'series_name_title' => '趣 -OMOMUK-',
		'mainvisual_text_headline' => '趣 -OMOMUKI-',
		'mainvisual_text' => '',
		'series_name_html' => 'お茶',
		'series_description' => '
			丹波の黒目茶、黒豆ほうじ茶は女性に嬉しい大豆イソフラボンを含む<br class="display-pc">
			ほっと一息つきたいときに飲んでいただきたいお茶です。<br><br>
			忙しい時こそ、オフの時間を意識して大切にして頂きたい。<br><br>
			呼吸が浅くなっているのを感じた時、ここ最近ぼーっとできていないなと感じた時など、<br class="display-pc">
			オンとオフの切り替えに飲んでいただくのもおすすめです。
		'
	),

	'supplement' => array(
		'series_name_title' => '柔 -JYU-',
		'mainvisual_text_headline'=>'柔 -JYU-',
		'mainvisual_text'=>'',
		'series_name_html'=>'サプリメント',
		'series_description'=>'
			体がしなやかで心も軽やかに。<br>
			施術は外からのケア、「柔 エラスチックサプリメント」は内側からの体づくりをサポートいたします。
		',
	),

);

$products = array(
	'basicskincare' => array(

		array(
			'id' => 0,
			'img_url' => "/img/product_skin_lotion.png",
			'product_title' =>'JYOICHI TAOYAKA スキンローション',
			'product_name' => 'JYOICHI TAOYAKA <br class="display-sp">スキンローション',
			'product_amount_price' => array(
				array(
					'product_amount' => '【化粧水】160ml',
					'product_price' => '6,000'
				),
			),
			'product_description' => '
				キク科の花の一種であるカミツレの成分を配合した、<br class="display-pc">
				余分なものはいれない、お肌に優しい化粧水です。<br>
				さっぱりとした使い心地で、滑らかで瑞々しい素肌に導きます。
			',
			'information_detail' => array(
				'成分:水・グリセリン・エタノール・グアイアズレンスルホン酸Na'
			)
		),

		array(
			'id' => 1,
			'img_url' => "/img/product_skinmilk.png",
			'product_title' =>'JYOICHI TAOYAKA スキンミルク',
			'product_name' => 'JYOICHI TAOYAKA <br class="display-sp">スキンミルク',
			'product_amount_price' => array(
				array(
					'product_amount' => '【乳液】160ml',
					'product_price' => '6,000'
				),
			),
			'product_description' => '
				人間の皮脂を研究し、皮脂の組成に限りなく近い成分で作り上げた乳液です。<br>
				それにより、素肌をやさしく労わります。ふっくらと自然に艶めく肌感触をもたらします・
			',
			'information_detail' => array(
				'成分:水・スクワラン・ステアリン酸グリセル・ステアリン酸・セタノール・ミツロウ・香料'
			)
		),

		array(
			'id' => 2,
			'img_url' => "/img/product_oil syuusei.png",
			'product_title' =>'JYOICHI TAOYAKA オイル',
			'product_name' => 'JYOICHI TAOYAKA <br class="display-sp">オイル',
			'product_amount_price' => array(
				array(
					'product_amount' => '【美容オイル】38ml',
					'product_price' => '12,000'
				),
			),
			'product_description' => '
				天然のスクワランとカミツレの花の精油を配合したオイルです。<br>
				夜寝る前につけて潤いで満たすことにより、<br class="display-pc">
				翌朝キュッと引きあがりもっちりとした触り心地をお楽しみいただけます。
			',
			'information_detail' => array(
				'成分:スクワラン・グアイアズレン'
			)
		),

		array(
			'id' => 3,
			'img_url' => "/img/product_face_pack.png",
			'product_title' =>'JYOICHI TAOYAKA フェイスパック',
			'product_name' => 'JYOICHI TAOYAKA <br class="display-sp">フェイスパック',
			'product_amount_price' => array(
				array(
					'product_amount' => '【パック】60g',
					'product_price' => '13,000'
				),
			),
			'product_description' => '
				体に必要な天然のミネラルが入った土のパックです。<br>
        気になるところに少し厚めにのせていただくのがおすすめです。
			',
			'information_detail' => array(
				'成分:ケイル酸AL・グリセリン・水・グアイアズレンスルホン酸Na'
			)
		),

		array(
			'id' => 4,
			'img_url' => "/img/product_moisture.png",
			'product_title' =>'JYOICHI TAOYAKA モイスチャークリーム',
			'product_name' => 'JYOICHI TAOYAKA <br class="display-sp">モイスチャークリーム',
			'product_amount_price' => array(
				array(
					'product_amount' => '【保湿クリーム】40g',
					'product_price' => '8,000'
				),
			),
			'product_description' => '
				肌馴染みがよく、ベタつかずにふんわりとした肌に仕上げます。<br>
				目元、口元、首などの気になるところに重ね付けしてやさしくなじませてください。
			',
			'information_detail' => array(
				'成分:水・オリブ油・ステアリン酸グリセリル・スクワラン・セタノール・ステアリン酸・ミツロウ・香料'
			)
		),

		array(
			'id' => 5,
			'img_url' => "/img/product_cream_soap.png",
			'product_title' =>'JYOICHI TAOYAKA クリームソープ',
			'product_name' => 'JYOICHI TAOYAKA <br class="display-sp">クリームソープ',
			'product_amount_price' => array(
				array(
					'product_amount' => '【クリーム石けん】120g',
					'product_price' => '3,000'
				),
			),
			'product_description' => '
				皮膚の脂分をすっかり洗い流すのではなく、<br class="display-pc">
				素肌の汚れをソープの泡がやわらかく包み洗い流してくれます。<br>
				ビタミンEが配合されているので、洗顔後もお肌がつっぱらず、<br class="display-pc">
				お肌を優しく保護してくれます。
			',
			'information_detail' => array(
				'成分:水・ココイルグルタミン酸Na・オレフィン(c14-16)スルホン酸Na・グリセリン・PEG75・PCA-Na・トリイソステアリン酸PEG-20 水添ヒマシ油・コカミドDEA・ジステアリン酸グリコール・トコフェロール・香料'
			)
		),

		array(
			'id' => 6,
			'img_url' => "/img/product_body _softener.png",
			'product_title' =>'JYOICHI TAOYAKA ボディソフナー',
			'product_name' => 'JYOICHI TAOYAKA <br class="display-sp">ボディソフナー',
			'product_amount_price' => array(
				array(
					'product_amount' => '【ハンドクリーム】55g',
					'product_price' => '1,250'
				),
				array(
					'product_amount' => '【ボディークリーム】120g',
					'product_price' => '2,500'
				),
			),
			'product_description' => '
				乾燥がきになる部位にたっぷりなじませお使いください。<br>
				水を感じる伸びの良い柔らかいテクスチャー、<br class="display-pc">
				そのあとにさらっとした優しい膜が肌を包み守ります。
			',
			'information_detail' => array(
				'成分:水・ステアリン酸グリセル・スクワラン・ステアリン酸・セタノール・ミツロウ・香料'
			)
		),

	),

	'japanese' => array(

		array(
			'id' => 0,
			'img_url' => "/img/product_kelp.png",
			'product_title' =>'こんぶとふのり -kelp and funori-',
			'product_name' => 'こんぶとふのり<br class="display-sp"> -kelp and funori-',
			'product_amount_price' => array(
				array(
					'product_amount' => '1包5g入(10包)',
					'product_price' => '1,800'
				),
			),
			'product_description' => '
			海の恵み、こんぶとふのりを使ったヘアケア商品です。<br>
			簡単に済ませがちなご自身のケアを、<br class="display-pc">
			たまにはゆっくり時間をかけて上質な天然の成分で行いませんか？',
			'information_detail' => array(
				'<span>原材料：</span><br>ふのり（九州産）、こんぶ（北海道産)',
				'<span>使用方法：</span><br>
				 1包5g入(10包)をゆのみ、コーヒーカップ等に入れ温湯でよくかきまぜ溶かしてお使いください。昔から使用されている100%天然海藻です。異常を感じた時はご使用をお止めください。'
			)
		),
		array(
			'id' => 1,
			'img_url' => "/img/product_bran.png",
			'product_title' =>'ぬかとふくろ -bran and bag-',
			'product_name' => 'ぬかとふくろ<br class="display-sp"> -bran and bag-',
			'product_amount_price' => array(
				array(
					'product_amount' => '白ぬかと胚芽(アルミパック入)120g 2枚',
					'product_price' => '1,200'
				),
			),
			'product_description' => '
			ぬか袋は石鹸が普及する昭和初期までは祖母・母から娘へと伝えられてきたお肌のお手入れ方法です。<br>
			木綿袋によってお肌の産毛を除き、お肌をなめらかに導きます。',
			'information_detail' => array(
				'使用方法<br>
				 ぬかを木綿袋にスプーンで2~3杯(約20g~30g)を入れ、紐を温水につけよく含ませてお肌をこすります。使用後は通風のよいところに乾かしてください。本品は栄養価が高い自然物ですが、お肌に異常がなくなったらご使用をお止めください。'
			)
		),
		array(
			'id' => 2,
			'img_url' => "/img/product_aduki.png",
			'product_title' =>'あずき -aduki-',
			'product_name' => 'あずき<br class="display-sp"> -aduki-',
			'product_amount_price' => array(
				array(
					'product_amount' => 'あずきの粉(アルミパック入)120g',
					'product_price' => '2,200'
				),
			),
			'product_description' => '
			古代名は「澡豆(さくず)」といい、奈良時代より女性は小豆を粉にして<br class="display-pc">
			洗顔に使っていたことが古書に記述されています。<br>
			小豆には肌を守るサボニンが含まれ、粒子が古い角質や刺激が肌の血行を促し、新陳代謝を活発にします。<br class="display-pc">
			現代で言うスクラブ洗顔法のことです。<br class="display-pc">
			洗顔クリーム、洗顔フォーム、ぬか袋等に混ぜて使用しますとよりいっそう肌を柔らかくします。',
			'information_detail' => array(
				'原材料:あずき(北海道)',
				'使用方法<br>
				 掌に0.5gほどの小豆の粉を温湯で練り御使用ください。又は泡立てた石鹸に混ぜたり、ぬか袋の中にぬかと混ぜて御使用ください。万が一ご使用中に異常を感じたらおやめください。あり合わせの容器に入れ替えて御使用ください。'
			)
		),
	),
	'tea' => array(
		array(
			'id' => 0,
			'img_url' =>'/img/product_otya.png',
			'product_title' =>'趣 丹波黒豆茶 -Tamba black beans tea-',
			'product_name' => '趣 丹波黒豆茶<br class="display-sp"> -Tamba black beans tea-',
			'product_amount_price' => array(
				array(
					'product_amount' => '10g×10袋(100g)',
					'product_price' => '1,400'
				),
			),
			'product_description' => '
      丹波篠山産黒大豆を深煎りし、風味、香ばしさを引き出した黒豆茶で甘みも感じられます。<br class="display-pc">
      丹波黒豆の色合いと風味が出やすい粗挽きタイプ。<br class="display-pc">
      <br>便利なティーバック入り。',
			'information_detail' => array(
				'原材料名:黒豆茶(丹波篠山)(遺伝子組み換えでない)'
			),
		),
		array(
			'id' => 1,
			'img_url' =>'/img/product_houjitya.png',
			'product_title' =>'趣 丹波黒豆ほうじ茶 -rost Tamba black beans tea-',
			'product_name' => '趣 丹波黒豆ほうじ茶<br class="display-sp"> -rost Tamba black beans tea-',
			'product_amount_price' => array(
				array(
					'product_amount' => '5g×12袋(60g)',
					'product_price' => '1,400'
				),
			),
			'product_description' => '
      丹波篠山産黒大豆を深煎りし、風味、香ばしさを引き出した黒豆ほうじ茶です。<br>
      黒豆茶よりも深い香ばしさが特徴です。<br class="display-pc">
      便利なティーバック入り。',
			'information_detail' => array(
				'原材料名:ほうじ茶(鹿児島産)、黒豆茶(丹波篠山産)(遺伝子組み換えでない)'
			),
		)
	),
	'supplement' => array(
		array(
			'id' => 0,
			'img_url' =>'/img/product_elastin.png',
			'product_title' =>'柔 -ELASTIN SUPPLEMENT-',
			'product_name' => '柔 -ELASTIN SUPPLEMENT-',
			'product_amount_price' => array(
				array(
					'product_amount' => '【豚由来水溶性エラスチン加工商品】<br>16.38g (1粒重量182mg)内容量 120mg]×90粒',
					'product_price' => '6,600'
				),
			),
			'product_description' => '
			国産にこだわり、女性の体に特化した美容サプリメント。<br>
			エラスチンはコムのように伸び縮みをする性質が大きな特徴で、<br class="display-pc">
			じん帯やはい、動脈、子宮など、伸縮を必要とする部分に多く含まれ、<br class="display-pc">
			私たちが生きている限り常に伸び縮みを繰り返しています。<br class="display-pc"><br>
			みずみずしさ、シアや傘をキープするエラスチンは<br class="display-pc">
			歳を取っても軽やかに行動するために、健康維持に、とても重要な成分です。<br>
			イキイキと美しく毎日を過ごしたい方に飲んでいただきたいサプリメントです。
			',

			'information_detail' => array(
				'原材料名:トリペプチド高含有コラーゲンペプチド(ゼラチンを含む)、豚由来水溶性エラスチン、プロテオグリカン含有鮭鼻軟骨抽出物(デキストリン・鮭鼻軟骨抽出物)、セラミド含有米抽出物/ゼラチン',
				'お召し上がり方の目安:1日3粒を目安に水又はぬるま湯と共にお召し上がりください。<br>*開封後は早めにお召し上がりください。',
				'栄養成分表示 546mg/3粒あたり<br>
				 エネルギー : 1.938kcal<br>
				 タンパク質 : 0.481g<br>
				 脂質 : 0.001g<br>
				 炭水化物 : 0.0005g<br>
				 食塩相当量 : 0.017g<br>
				 豚由来水溶性エラスチン : 100mg<br>
				 プロテオグリカン含有鮭鼻軟骨抽出物 : 50mg<br>
				 (プロテオグリカンとして10mg)
				'
			),
		)
	),
);
