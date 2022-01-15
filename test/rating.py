from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
import time


#Variable Declare

name="22"
ratings="5"
review ="good"




#Registration Page
driver = webdriver.Chrome(ChromeDriverManager().install()) 
driver.get("http://localhost/Software_lab/MedicineHouse/rating.php?action=rat&id=1")
print(driver.title)
driver.maximize_window()

#Set Data
link = driver.find_element_by_xpath('/html/body/form/div/input[1]')
link.send_keys(name)


link1 = driver.find_element_by_xpath('/html/body/form/div/input[2]')
link1.send_keys(ratings)

link2 = driver.find_element_by_xpath('/html/body/form/div/input[3]')
link2.send_keys(review)




link5 = driver.find_element_by_xpath('/html/body/form/div/input[4]')
link5.click()
x=input()


#Registration Page
driver = webdriver.Chrome(ChromeDriverManager().install()) 
driver.get("http://localhost/Software_lab/MedicineHouse/rating.php?action=rat&id=1")
print(driver.title)
driver.maximize_window()

element = driver.find_element_by_xpath('//*[@id="cmt"]/tbody/tr[4]/td[1]')
x=input()



if (element.text == name):
    print("Correct")
else:
    print("Incorrect")    


x = input()