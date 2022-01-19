from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
import time
from selenium.webdriver.common.alert import Alert

driver = webdriver.Chrome(ChromeDriverManager().install())
driver.get("http://localhost/medicine_store/medicinehouse/suggestion.php")

btn = driver.find_element_by_xpath('/html/body/form/div/a[1]/input')
btn.click();
btn2 = driver.find_element_by_xpath('//*[@id="btnChange"]')
btn2.click();
Alert(driver).send_keys("asif@gmail.com")
Alert(driver).accept() ;

time.sleep(2)

result = driver.find_element_by_xpath('//*[@id="p5"]')
time.sleep(3)
if (result.text == 'Patient feedback is: napa 7 days'):
	print('Matched')
else:
	print('Not Matched! Expected: Patient feedback is: napa 7 days, Received: ' + result.text)


x = input()