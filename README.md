# **cx Script**

===== 參數 運算 方法 =====
變數

    set: val1=10
	set: val2=hello

列印

    print: hello

顯示變數

    print: %val1

運算(只能計算整數)

    cx_abacus: %val1 = ( 1 + 1 ) * 10 % 2
	print: %val1

IF判斷 成立進入 fn_ok 函數 反之

    cx_if: %val1 == 0 , fn_OK , fn_BAD


亂數 1~30 隨機

    set: val1=fnRandom( 1 to 30 )

停留1～30隨機秒

    Screen_wait: fnRandom( 1 to 30 )
    # 等待1.1秒
    Screen_wait: 1.1
    
   
移動到圖片後點擊

    Screen_move_image_click: %image_file+"my_blog_text.png"

移動圖片後偏移點擊

    Screen_move_image_click: %image_file+"my_blog_text.png",10,20

下拉搜尋圖片 下拉距離10 ，下拉最大次數5

    Screen_wheel_search_image: %image_file+"ads.png",down,10,5

等待圖片出現， 50爲最大等待秒數

    Screen_wait_image: %image_file+"ads.png",50

輸入文字，點擊enter

    Screen_paste: "翻譯社"
    # 點擊 enter
    Screen_type: "ENTER"

<hr/>
========= 腳本流程 ======

    # 初始化(必要函數)
    FN->SYSInit:
		set: val1=fnRandom( 1 to 30 )
		...
	END_FN
	#主執行(必要函數)
	FN->MAIN_ok:
		print: Run CXScript! 
		print: %val1
		..
	END_FN


<hr/>
===== 自定函數 =====

    ### 自定義函數
    FN->User: 
		print: 執行函數 user
		print: %z
	END_FN
	### 主執行
	FN->MAIN:
		print: Run CXScript!
		
		# 執行函數
		User:
	END_FN

