from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
import time


#Variable Declare

name="22"
email="22@gmail.com"
pas ="1234"
con="1234"
phn="0123455"


#Registration Page
driver = webdriver.Chrome(ChromeDriverManager().install()) 
driver.get("http://localhost/Software_lab/MedicineHouse/registration_html.php")
print(driver.title)
driver.maximize_window()

#Set Data
link = driver.find_element_by_xpath('/html/body/form/div/div[1]/input')
link.send_keys(name)


link1 = driver.find_element_by_xpath('/html/body/form/div/div[2]/input')
link1.send_keys(email)

link2 = driver.find_element_by_xpath('/html/body/form/div/div[3]/input')
link2.send_keys(pas)

link3 = driver.find_element_by_xpath('/html/body/form/div/div[4]/input')
link3.send_keys(con)

link4 = driver.find_element_by_xpath('/html/body/form/div/div[5]/input')
link4.send_keys(con)

link5 = driver.find_element_by_xpath('/html/body/form/div/input')
link5.click()
x=input()


#Registration Page
driver = webdriver.Chrome(ChromeDriverManager().install()) 
driver.get("http://localhost/Software_lab/MedicineHouse/showhow.html")
print(driver.title)
driver.maximize_window()

element = driver.find_element_by_xpath('//*[@id="tb"]/tbody/tr[2]/td[1]')
x=input()



if (element.text == name):
    print("Correct")
else:
    print("Incorrect") 

x=input()       
   


