from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
import time


#Variable Declare

name="22"
email="22@gmail.com"
con ="1234"
add="Dhaka"



#Registration Page
driver = webdriver.Chrome(ChromeDriverManager().install()) 
driver.get("http://localhost/software_lab/MedicineHouse/payment.php")
print(driver.title)
driver.maximize_window()

#Set Data
link = driver.find_element_by_xpath('//*[@id="exampleInputEmail1"]')
link.send_keys(name)


link1 = driver.find_element_by_xpath('/html/body/div/div/form/div[2]/input')
link1.send_keys(email)

link2 = driver.find_element_by_xpath('/html/body/div/div/form/div[3]/input')
link2.send_keys(con)

link3 = driver.find_element_by_xpath('/html/body/div/div/form/div[4]/input')
link3.send_keys(add)


link5 = driver.find_element_by_xpath('/html/body/div/div/form/div[5]/button')
link5.click()
x=input()


#Registration Page
driver = webdriver.Chrome(ChromeDriverManager().install()) 
driver.get("http://localhost/software_lab/MedicineHouse/orderlist_front.html")
print(driver.title)
driver.maximize_window()

element = driver.find_element_by_xpath('//*[@id="tb"]/tbody/tr[12]/td[1]')
x=input()



if (element.text == email):
    print("Correct")
else:
    print("Incorrect")    


