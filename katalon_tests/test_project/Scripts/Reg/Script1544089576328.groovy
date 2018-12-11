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
import java.util.Random
import org.apache.commons.lang.RandomStringUtils 

WebUI.openBrowser('')

WebUI.navigateToUrl('http://telegram-bot-kurs.herokuapp.com/')

WebUI.click(findTestObject('Page_Site helper bot/a_'))

WebUI.verifyTextPresent('Зарегистрируйтесь', false)

WebUI.setText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg'), 'имяимя')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_1'), 'HeCM15nHKBI=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_2'), 'lnBUteI2ioQ=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_3'), 'tzH6RvlfSTg=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_4'), '4nvbrPglk7k=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_5'), 'iGDxf8hSRT4=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_6'), 'iGDxf8hSRT4=')

WebUI.click(findTestObject('Object Repository/Page_Site helper bot/button_Registration'))

WebUI.verifyTextPresent('5 символов', false)
WebUI.click(findTestObject('Object Repository/Page_Site helper bot/a_'))

WebUI.setText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg'), 'namename')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_7'), 'HeCM15nHKBI=')


WebUI.click(findTestObject('Object Repository/Page_Site helper bot/button_Registration'))
WebUI.click(findTestObject('Object Repository/Page_Site helper bot/a_'))

WebUI.setText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg'), 'namename')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_7'), 'HeCM15nHKBI=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_8'), 'lnBUteI2ioQ=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_9'), 'tzH6RvlfSTg=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_10'), '4nvbrPglk7k=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_11'), 'iGDxf8hSRT4=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_12'), 'iGDxf8hSRT4=')

WebUI.click(findTestObject('Object Repository/Page_Site helper bot/button_Registration'))

WebUI.verifyTextPresent('такой логин уже есть', false)

WebUI.click(findTestObject('Object Repository/Page_Site helper bot/a_'))



WebUI.setText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg'), 'nam')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_7'), 'HeCM15nHKBI=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_8'), 'lnBUteI2ioQ=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_9'), 'tzH6RvlfSTg=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_10'), '4nvbrPglk7k=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_11'), 'iGDxf8hSRT4=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_12'), 'iGDxf8hSRT4=')

WebUI.click(findTestObject('Object Repository/Page_Site helper bot/button_Registration'))

WebUI.verifyTextPresent('Длина логина должна', false)

WebUI.click(findTestObject('Object Repository/Page_Site helper bot/a_'))





WebUI.setText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg'), RandomStringUtils.randomNumeric(5) )

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_13'), 'HeCM15nHKBI=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_14'), 'lnBUteI2ioQ=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_15'), 'tzH6RvlfSTg=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_16'), '4nvbrPglk7k=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_17'), 'iGDxf8hSRT4=')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Site helper bot/input_  login  username  teleg_18'), 'iGDxf8hSRT4=')

WebUI.click(findTestObject('Object Repository/Page_Site helper bot/button_Registration'))

WebUI.verifyTextPresent('Поздравляем с регистрацией', false)

WebUI.closeBrowser()

