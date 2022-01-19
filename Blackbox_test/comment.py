from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
import time


#Variable Declare

name="sk"
cmt="good website"


#Registration Page
driver = webdriver.Chrome(ChromeDriverManager().install()) 
driver.get("http://localhost/software_lab/MedicineHouse/comment.php")
print(driver.title)
driver.maximize_window()

#Set Data
link = driver.find_element_by_xpath('/html/body/form/input[1]')
link.send_keys(name)


link1 = driver.find_element_by_xpath('/html/body/form/textarea')
link1.send_keys(cmt)


link3 = driver.find_element_by_xpath('/html/body/form/input[2]')
link3.click()
x=input()

element = driver.find_element_by_xpath('//*[@id="cmt"]/tbody/tr[6]/td[1]')
x=input()

element1 = driver.find_element_by_xpath('//*[@id="cmt"]/tbody/tr[6]/td[2]')
x=input()

if (element.text == name and element1.text==cmt):
    print("Correct")
else:
    print("Incorrect")    


