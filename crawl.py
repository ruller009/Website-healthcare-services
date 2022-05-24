import requests
from bs4 import BeautifulSoup
import psycopg2
import time

con = psycopg2.connect(
	database="ruller", 
	user = "postgres", 
	password = "anhlaso1", 
	host = "localhost")
cur=con.cursor()

link_save1 = '24h'
link_save2 = 'zing'

while 1:
	# PHẦN 1 NÈ

	# GENERAL
	print(link_save1 + ' VÀ ' + link_save2)

	url_24h='https://www.24h.com.vn/suc-khoe-doi-song-c62.html'
	response = requests.get(url_24h)
	soup=BeautifulSoup(response.content, "html.parser")
	link_24h = soup.find('div', class_ = 'img rlt').find('a').attrs['href']
	if link_24h == link_save1 :
		print('Trang báo 24h chưa được cập nhật')
	else :
		print('bat dau crawl 24h' + '------------------------------')
		link_save1 = link_24h

		title_short = soup.find('div', class_ = 'img rlt').find('a').attrs['title']
		intro_image = soup.find('div', class_ = 'img rlt').find('img').attrs['data-original']
		heading_short = soup.find('div', class_ = 'desc').text

		# DETAIL
		response = requests.get(link_24h)
		soup=BeautifulSoup(response.content, "html.parser")
		title = soup.find('h1', id = 'article_title').text
		heading = soup.find('h2', id = 'article_sapo').text
		datetime = soup.find('div', class_ = 'updTm updTmD mrT5').text
		content = ['', '', '', '', '', '', '', '', '']
		img = ['', '', '', '', '', '', '', '', '']
		texts = soup.find(id = 'article_body' ).findAll(lambda tag: tag.name == 'p' and not tag.attrs, class_ = None, recursive = False )
		# CRAWL CONTENTS AND IMAGES
		print(len(texts))
		i = 0
		if (len(texts)) > 1 :
			print('starting find text------------------------')
			for text in texts :
				print(i)
				if text.find('img') is None :
					content[i] = content[i] +'<p>'+text.text+'</p>'+ '\n'
					if text.find_next('p').find('img') is not None :
						i =i + 1
			i = 0
			images = soup.find(id = 'article_body').findAll('img', class_ = 'news-image')			
			if len(images) > 0 :
				for image in images : 
					if i == 0 :
						img[i] = image.attrs['src']
					else :
						img[i] = image.attrs['data-original']	
					i = i + 1
		# WRITE INTO DATABASE STEP 1:
			cur.execute("insert into news_general(short_title,short_heading,intro_img) values (%s,%s,%s) " ,(title_short,heading_short,intro_image))
			cur.execute("insert into news_detail(title, heading, time, content1, img1, content2, img2, content3, img3, content4, img4, content5, img5, content6, img6, content7, img7, content8, img8, content9, img9) values (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s) " ,(title, heading, datetime, content[0], img[0], content[1], img[1], content[2], img[2], content[3], img[3], content[4], img[4], content[5], img[5], content[6], img[6], content[7], img[7], content[8], img[8]  ))
			con.commit()

# PHẦN 2 NÈ
	print(link_save2)
	url_zing = 'https://zingnews.vn/suc-khoe.html'
	response = requests.get(url_zing)
	soup=BeautifulSoup(response.content, "html.parser")
	link_zing = 'http://zingnews.vn' + soup.find('p', class_ = 'article-thumbnail').find('a').attrs['href']
	if link_zing == link_save2 :
		print("Trang báo zingnews chưa cập nhật " + '------------------------------')
	else :
		print('bat dau crawl zing' + '------------------------------')
		link_save2 = link_zing

		title_short = soup.find('p', class_ = 'article-title').find('a').text
		intro_img = soup.find('p', class_ = 'article-thumbnail').find('img').attrs['src']
		print(intro_img)

		response = requests.get(link_zing)
		soup = BeautifulSoup(response.content, "html.parser")
		heading_short = soup.find('p', class_ = 'the-article-summary').text
		content = ['', '', '', '', '', '', '', '', '']
		img = ['', '', '', '', '', '', '', '', '']
		body = soup.find('div', class_ = 'the-article-body')
		if body is not None : 
			texts = body.findAll('p', recursive = False)		
			title = soup.find('h1', class_ = 'the-article-title').text
			datetime = soup.find('li', class_ = 'the-article-publish').text
			heading = soup.find('p', class_ = 'the-article-summary').text
# Bat dau tim kiem content
			i = 0
			for text in texts :
				if text.find('img') is None :
					content[i] = content[i] +'<p>'+text.text+'</p>'+'\n'
					if text.find_next().find('img') is not None :
						i = i + 1
# Bat dau tim kiem image
			i = 0
			images = soup.findAll('table', class_ = 'picture' )
			if len(images) > 0 :
				for image in images :
					if image.find('img') is not None :
						img[i] = image.find('img').attrs['data-src']
						i = i + 1
			cur.execute("insert into news_general(short_title,short_heading,intro_img) values (%s,%s,%s) " ,(title_short,heading_short,intro_img))
			cur.execute("insert into news_detail(title, heading, time, content1, img1, content2, img2, content3, img3, content4, img4, content5, img5, content6, img6, content7, img7, content8, img8, content9, img9) values (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s) " ,(title, heading, datetime, content[0], img[0], content[1], img[1], content[2], img[2], content[3], img[3], content[4], img[4], content[5], img[5], content[6], img[6], content[7], img[7], content[8], img[8]  ))
			con.commit()
	print('HÃY TIẾP TỤC CHỜ ĐỢI 1 GIỜ NỮA')		
	time.sleep(3600)				








