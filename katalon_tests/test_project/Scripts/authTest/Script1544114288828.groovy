import static com.kms.katalon.core.checkpoint.CheckpointFactory.findCheckpoint
import static com.kms.katalon.core.testcase.TestCaseFactory.findTestCase
import static com.kms.katalon.core.testdata.TestDataFactory.findTestData
import static com.kms.katalon.core.testobject.ObjectRepository.findTestObject
import com.kms.katalon.core.checkpoint.Checkpoint as Checkpoint
import com.kms.katalon.core.cucumber.keyword.CucumberBuiltinKeywords as CucumberKW
import com.kms.katalon.core.mobile.keyword.MobileBuiltInKeywords as Mobile
import com.kms.katalon.core.model.FailureHandling as FailureHandling
import com.kms.katalon.core.testcase.TestCase as TestCase
import com.kms.katalon.core.testdata.TestData as TestData
import com.kms.katalon.core.testobject.TestObject as TestObject
import com.kms.katalon.core.webservice.keyword.WSBuiltInKeywords as WS
import com.kms.katalon.core.webui.keyword.WebUiBuiltInKeywords as WebUI
import internal.GlobalVariable as GlobalVariable
import org.apache.commons.lang.RandomStringUtils

WebUI.openBrowser('')

WebUI.navigateToUrl('http://telegram-bot-kurs.herokuapp.com/')

WebUI.click(findTestObject('Object Repository/Page_Site helper bot/a_ (1)'))

String name;
name = RandomStringUtils.randomNumeric(5)

WebUI.setText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg (1)'), name)

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_1 (1)'), 'HeCM15nHKBI=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_2 (1)'), 'lnBUteI2ioQ=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_3 (1)'), 'tzH6RvlfSTg=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_4 (1)'), '4nvbrPglk7k=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_5 (1)'), 'iGDxf8hSRT4=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_6 (1)'), 'iGDxf8hSRT4=')

WebUI.click(findTestObject('Object Repository/Page_Site helper bot/button_Registration (1)'))

WebUI.verifyTextPresent('Поздравляем с регистрацией', false)

WebUI.click(findTestObject('Object Repository/Page_Site helper bot/a__1'))

WebUI.verifyTextPresent('Введите данные', false)

WebUI.setText(findTestObject('Object Repository/Page_Site helper bot/input_ _name'), name)

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_ _password'), 'iGDxf8hSRT4=')

WebUI.click(findTestObject('Object Repository/Page_Site helper bot/button_Sign in'))

WebUI.verifyTextPresent('Поздравляем с авторизацией', false)

WebUI.click(findTestObject('Object Repository/Page_Site helper bot/a__2'))

WebUI.verifyTextPresent('Вы уже зашли в сессию!', false)

WebUI.verifyElementVisible(findTestObject('Object Repository/Page_Site helper bot/a_4'))

WebUI.click(findTestObject('Object Repository/Page_Site helper bot/a_4'))

WebUI.click(findTestObject('Object Repository/Page_Site helper bot/a__3'))

WebUI.setText(findTestObject('Object Repository/Page_Site helper bot/input_ _name'), name)

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_ _password'), 'w+XbbEPXAJE=')

WebUI.click(findTestObject('Object Repository/Page_Site helper bot/button_Sign in'))

WebUI.verifyTextPresent('Неправильный логин или пароль!', false)

WebUI.setText(findTestObject('Object Repository/Page_Site helper bot/input_ _name'), RandomStringUtils.randomNumeric(5))

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_ _password'), 'KZGOa9qn9C4=')

WebUI.click(findTestObject('Object Repository/Page_Site helper bot/button_Sign in'))

WebUI.verifyTextPresent('Неправильный логин или пароль!', false)

