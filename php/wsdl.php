<?xml version="1.0" encoding="ISO-8859-1"?>
<definitions xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/" xmlns:tns="urn:SedoInterface" xmlns:soap="http://schemas.xmlsoap.org/wsdl/soap/" xmlns:wsdl="http://schemas.xmlsoap.org/wsdl/" xmlns="http://schemas.xmlsoap.org/wsdl/" targetNamespace="urn:SedoInterface">
<types>
<xsd:schema targetNamespace="urn:SedoInterface"
>
 <xsd:import namespace="http://schemas.xmlsoap.org/soap/encoding/" />
 <xsd:import namespace="http://schemas.xmlsoap.org/wsdl/" />
 <xsd:complexType name="ArrayOfString">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:string[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="ArrayOfInt">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:int[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="AccountDataRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="AccountDataResponse">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="email" type="xsd:string"/>
   <xsd:element name="addition" type="xsd:int"/>
   <xsd:element name="firstname" type="xsd:string"/>
   <xsd:element name="lastname" type="xsd:string"/>
   <xsd:element name="company" type="xsd:string"/>
   <xsd:element name="street" type="xsd:string"/>
   <xsd:element name="zipcode" type="xsd:string"/>
   <xsd:element name="city" type="xsd:string"/>
   <xsd:element name="state" type="xsd:string"/>
   <xsd:element name="country" type="xsd:string"/>
   <xsd:element name="language" type="xsd:string"/>
   <xsd:element name="vat" type="xsd:string"/>
   <xsd:element name="phone" type="xsd:string"/>
   <xsd:element name="fax" type="xsd:string"/>
   <xsd:element name="mobile" type="xsd:string"/>
   <xsd:element name="parkingearnings" type="xsd:double"/>
   <xsd:element name="currency" type="xsd:int"/>
   <xsd:element name="domaincount" type="xsd:int"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="AddPortfolioDomainRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="portfolioname" type="xsd:string"/>
   <xsd:element name="domainentry" type="tns:DomainEntryPortfolioArray"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="AddPortfolioDomainResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="portfolioname" type="xsd:string"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="AddPortfolioDomainResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:AddPortfolioDomainResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="BankDataResponse">
  <xsd:all>
   <xsd:element name="paymentoption" type="xsd:int"/>
   <xsd:element name="accountowner" type="xsd:string"/>
   <xsd:element name="accountnumber" type="xsd:string"/>
   <xsd:element name="routingnumber" type="xsd:string"/>
   <xsd:element name="bankname" type="xsd:string"/>
   <xsd:element name="swiftcode" type="xsd:string"/>
   <xsd:element name="bankstreet" type="xsd:string"/>
   <xsd:element name="bankcity" type="xsd:string"/>
   <xsd:element name="bankstate" type="xsd:string"/>
   <xsd:element name="bankzipcode" type="xsd:string"/>
   <xsd:element name="bankcountry" type="xsd:string"/>
   <xsd:element name="paypalaccount" type="xsd:string"/>
   <xsd:element name="checkpayableto" type="xsd:string"/>
   <xsd:element name="checkstreet" type="xsd:string"/>
   <xsd:element name="checkcity" type="xsd:string"/>
   <xsd:element name="checkstate" type="xsd:string"/>
   <xsd:element name="checkzipcode" type="xsd:string"/>
   <xsd:element name="checkcountry" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="BankDataRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="EditBankDataRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="paymentoption" type="xsd:int"/>
   <xsd:element name="accountowner" type="xsd:string"/>
   <xsd:element name="accountnumber" type="xsd:string"/>
   <xsd:element name="routingnumber" type="xsd:string"/>
   <xsd:element name="bankname" type="xsd:string"/>
   <xsd:element name="swiftcode" type="xsd:string"/>
   <xsd:element name="bankstreet" type="xsd:string"/>
   <xsd:element name="bankcity" type="xsd:string"/>
   <xsd:element name="bankstate" type="xsd:string"/>
   <xsd:element name="bankzipcode" type="xsd:string"/>
   <xsd:element name="bankcountry" type="xsd:string"/>
   <xsd:element name="paypalaccount" type="xsd:string"/>
   <xsd:element name="checkpayableto" type="xsd:string"/>
   <xsd:element name="checkstreet" type="xsd:string"/>
   <xsd:element name="checkcity" type="xsd:string"/>
   <xsd:element name="checkstate" type="xsd:string"/>
   <xsd:element name="checkzipcode" type="xsd:string"/>
   <xsd:element name="checkcountry" type="xsd:string"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="ChangePasswordRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="newpassword" type="xsd:string"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="CheckBlacklistEntry">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="CheckBlacklistRequestArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:CheckBlacklistEntry[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="CheckBlacklistRequest">
  <xsd:all>
   <xsd:element name="blacklist" type="tns:CheckBlacklistRequestArray"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="CheckBlacklistResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="blacklisted" type="xsd:boolean"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="CheckBlacklistResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:CheckBlacklistResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="CheckMemberRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="CheckAvailableRegistrationRequest">
  <xsd:all>
   <xsd:element name="q" type="xsd:string"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="CreateAccountRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="email" type="xsd:string"/>
   <xsd:element name="addition" type="xsd:int"/>
   <xsd:element name="firstname" type="xsd:string"/>
   <xsd:element name="lastname" type="xsd:string"/>
   <xsd:element name="company" type="xsd:string"/>
   <xsd:element name="street" type="xsd:string"/>
   <xsd:element name="zipcode" type="xsd:string"/>
   <xsd:element name="city" type="xsd:string"/>
   <xsd:element name="state" type="xsd:string"/>
   <xsd:element name="country" type="xsd:string"/>
   <xsd:element name="language" type="xsd:string"/>
   <xsd:element name="vat" type="xsd:string"/>
   <xsd:element name="phone" type="xsd:string"/>
   <xsd:element name="fax" type="xsd:string"/>
   <xsd:element name="mobile" type="xsd:string"/>
   <xsd:element name="confirmation" type="xsd:boolean"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="CreatePortfolioRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="portfolioname" type="xsd:string"/>
   <xsd:element name="domainentry" type="tns:DomainEntryPortfolioArray"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="CreatePortfolioResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="portfolioname" type="xsd:string"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="CreatePortfolioResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:CreatePortfolioResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="DeletePortfolioRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="portfolioname" type="xsd:string"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DeletePortfolioResponse">
  <xsd:all>
   <xsd:element name="portfolioname" type="xsd:string"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DeletePortfolioDomainRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="portfolioname" type="xsd:string"/>
   <xsd:element name="domainentry" type="tns:DomainEntryPortfolioArray"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DeletePortfolioDomainResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="portfolioname" type="xsd:string"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DeletePortfolioDomainResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:DeletePortfolioDomainResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="DisplayPortfolioDomainsRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
   <xsd:element name="portfolioname" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DisplayPortfolioDomainsResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="portfolioname" type="xsd:string"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DisplayPortfolioDomainsResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:DisplayPortfolioDomainsResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="DisplayPortfolioDomainsMoreThenOneRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DisplayPortfolioDomainsMoreThenOneResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DisplayPortfolioDomainsMoreThenOneResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:DisplayPortfolioDomainsMoreThenOneResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="DisplayPortfolioDomainsNotInRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DisplayPortfolioDomainsNotInResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DisplayPortfolioDomainsNotInResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:DisplayPortfolioDomainsNotInResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="DisplayPortfoliosRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="portfolioname" type="xsd:string"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DisplayPortfoliosResponse">
  <xsd:all>
   <xsd:element name="portfolioname" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DisplayPortfoliosResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:DisplayPortfoliosResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="DomainDeleteRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="domains" type="tns:ArrayOfString"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DomainDeleteResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DomainDeleteResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:DomainDeleteResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="DomainEditRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="domainentry" type="tns:DomainEntryArray"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DomainEditResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DomainEditResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:DomainEditResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="DomainElementsEntry">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="action" type="xsd:string"/>
   <xsd:element name="element" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DomainElementsRequestArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:DomainElementsEntry[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="DomainElementsRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="domainelements" type="tns:DomainElementsRequestArray"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DomainElementsResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="action" type="xsd:string"/>
   <xsd:element name="element" type="xsd:string"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DomainElementsResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:DomainElementsResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="DomainEntry">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="category" type="tns:ArrayOfInt"/>
   <xsd:element name="forsale" type="xsd:int"/>
   <xsd:element name="price" type="xsd:double"/>
   <xsd:element name="minprice" type="xsd:double"/>
   <xsd:element name="fixedprice" type="xsd:int"/>
   <xsd:element name="currency" type="xsd:int"/>
   <xsd:element name="domainlanguage" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DomainEntryArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:DomainEntry[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="DomainEntryPortfolioArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:DomainEntryPortfolio[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="DomainEntryPortfolio">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DomainInsertRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="domainentry" type="tns:DomainEntryArray"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DomainInsertResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DomainInsertResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:DomainInsertResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="DomainListRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="startfrom" type="xsd:int"/>
   <xsd:element name="results" type="xsd:int"/>
   <xsd:element name="orderby" type="xsd:int"/>
   <xsd:element name="domain" type="tns:ArrayOfString"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DomainListResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:DomainListResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="DomainListResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="category" type="tns:ArrayOfInt"/>
   <xsd:element name="forsale" type="xsd:int"/>
   <xsd:element name="price" type="xsd:double"/>
   <xsd:element name="minprice" type="xsd:double"/>
   <xsd:element name="fixedprice" type="xsd:int"/>
   <xsd:element name="currency" type="xsd:int"/>
   <xsd:element name="domainlanguage" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DomainListExtRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="startfrom" type="xsd:int"/>
   <xsd:element name="results" type="xsd:int"/>
   <xsd:element name="orderby" type="xsd:int"/>
   <xsd:element name="domain" type="tns:ArrayOfString"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DomainListExtResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:DomainListExtResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="DomainListExtResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="category" type="tns:ArrayOfInt"/>
   <xsd:element name="forsale" type="xsd:int"/>
   <xsd:element name="price" type="xsd:double"/>
   <xsd:element name="minprice" type="xsd:double"/>
   <xsd:element name="fixedprice" type="xsd:int"/>
   <xsd:element name="currency" type="xsd:int"/>
   <xsd:element name="domainlanguage" type="xsd:string"/>
   <xsd:element name="keywords" type="tns:DomainListExtKeywordsArray"/>
   <xsd:element name="inserted" type="xsd:string"/>
   <xsd:element name="earningscomplete" type="xsd:double"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DomainListExtKeywords">
  <xsd:all>
   <xsd:element name="keyword" type="xsd:string"/>
   <xsd:element name="market" type="xsd:string"/>
   <xsd:element name="advertiser" type="xsd:int"/>
   <xsd:element name="views" type="xsd:int"/>
   <xsd:element name="clicks" type="xsd:int"/>
   <xsd:element name="earnings" type="xsd:double"/>
   <xsd:element name="rpm" type="xsd:double"/>
   <xsd:element name="inserted" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DomainListExtKeywordsArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:DomainListExtKeywords[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="DomainParkingFinalStatisticsRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="period" type="xsd:int"/>
   <xsd:element name="date" type="xsd:string"/>
   <xsd:element name="startfrom" type="xsd:int"/>
   <xsd:element name="results" type="xsd:int"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DomainParkingFinalStatisticsResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="date" type="xsd:string"/>
   <xsd:element name="visitors" type="xsd:int"/>
   <xsd:element name="clicks" type="xsd:int"/>
   <xsd:element name="earnings" type="xsd:double"/>
   <xsd:element name="payout_status" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="ParkingFinalStatisticsArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:DomainParkingFinalStatisticsResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="DomainParkingPaymentsRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="date" type="xsd:string"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DomainParkingPaymentsResponse">
  <xsd:all>
   <xsd:element name="date" type="xsd:string"/>
   <xsd:element name="payments" type="xsd:double"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DomainParkingPaymentsArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:DomainParkingPaymentsResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="DomainSearchRequest">
  <xsd:all>
   <xsd:element name="keyword" type="xsd:string"/>
   <xsd:element name="tld" type="xsd:string"/>
   <xsd:element name="kwtype" type="xsd:string"/>
   <xsd:element name="no_hyphen" type="xsd:boolean"/>
   <xsd:element name="no_numeral" type="xsd:boolean"/>
   <xsd:element name="no_idn" type="xsd:boolean"/>
   <xsd:element name="resultsize" type="xsd:int"/>
   <xsd:element name="language" type="xsd:string"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DomainSearchResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="type" type="xsd:string"/>
   <xsd:element name="price" type="xsd:double"/>
   <xsd:element name="currency" type="xsd:int"/>
   <xsd:element name="rank" type="xsd:int"/>
   <xsd:element name="url" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DomainSearchResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:DomainSearchResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="DomainStatusRequest">
  <xsd:all>
   <xsd:element name="domainlist" type="tns:ArrayOfString"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DomainStatusResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="type" type="xsd:string"/>
   <xsd:element name="forsale" type="xsd:boolean"/>
   <xsd:element name="price" type="xsd:double"/>
   <xsd:element name="currency" type="xsd:string"/>
   <xsd:element name="visitors" type="xsd:int"/>
   <xsd:element name="domainstatus" type="xsd:int"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="DomainStatusResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:DomainStatusResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="EditAccountRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="email" type="xsd:string"/>
   <xsd:element name="addition" type="xsd:int"/>
   <xsd:element name="company" type="xsd:string"/>
   <xsd:element name="street" type="xsd:string"/>
   <xsd:element name="zipcode" type="xsd:string"/>
   <xsd:element name="city" type="xsd:string"/>
   <xsd:element name="state" type="xsd:string"/>
   <xsd:element name="country" type="xsd:string"/>
   <xsd:element name="language" type="xsd:string"/>
   <xsd:element name="vat" type="xsd:string"/>
   <xsd:element name="phone" type="xsd:string"/>
   <xsd:element name="fax" type="xsd:string"/>
   <xsd:element name="mobile" type="xsd:string"/>
   <xsd:element name="confirmation" type="xsd:boolean"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="EditAccountResponse">
  <xsd:all>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="GetDomainSetupRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="domainlist" type="tns:ArrayOfString"/>
   <xsd:element name="startFrom" type="xsd:int"/>
   <xsd:element name="results" type="xsd:int"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="GetDomainSetupResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:GetDomainSetupResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="GetDomainSetupResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="nameLanguage" type="xsd:string"/>
   <xsd:element name="relatedLinks" type="xsd:string"/>
   <xsd:element name="searchBox" type="xsd:string"/>
   <xsd:element name="disclaimer" type="xsd:string"/>
   <xsd:element name="systemLinks" type="xsd:string"/>
   <xsd:element name="buyBox" type="xsd:string"/>
   <xsd:element name="popUnder" type="xsd:string"/>
   <xsd:element name="twoclickPage" type="xsd:string"/>
   <xsd:element name="templateLayout" type="xsd:string"/>
   <xsd:element name="comment" type="xsd:string"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="SetDomainSetupRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="domainlistArray" type="tns:domainSetupArray"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="domainSetupArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:domainSetup[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="domainSetup">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="nameLanguage" type="xsd:string"/>
   <xsd:element name="relatedLinks" type="xsd:string"/>
   <xsd:element name="searchBox" type="xsd:string"/>
   <xsd:element name="disclaimer" type="xsd:string"/>
   <xsd:element name="systemLinks" type="xsd:string"/>
   <xsd:element name="buyBox" type="xsd:string"/>
   <xsd:element name="popUnder" type="xsd:string"/>
   <xsd:element name="twoclickPage" type="xsd:string"/>
   <xsd:element name="templateLayout" type="xsd:string"/>
   <xsd:element name="comment" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="SetDomainSetupResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:SetDomainSetupResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="SetDomainSetupResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="nameLanguage" type="xsd:string"/>
   <xsd:element name="relatedLinks" type="xsd:string"/>
   <xsd:element name="searchBox" type="xsd:string"/>
   <xsd:element name="disclaimer" type="xsd:string"/>
   <xsd:element name="systemLinks" type="xsd:string"/>
   <xsd:element name="buyBox" type="xsd:string"/>
   <xsd:element name="popUnder" type="xsd:string"/>
   <xsd:element name="twoclickPage" type="xsd:string"/>
   <xsd:element name="templateLayout" type="xsd:string"/>
   <xsd:element name="comment" type="xsd:string"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="GetKeywordEntry">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="market" type="xsd:string"/>
   <xsd:element name="advertiser" type="xsd:int"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="GetKeywordEntryArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:GetKeywordEntry[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="GetKeywordRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="keywordentry" type="tns:GetKeywordEntryArray"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="GetKeywordResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="keyword" type="xsd:string"/>
   <xsd:element name="market" type="xsd:string"/>
   <xsd:element name="advertiser" type="xsd:int"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="GetKeywordResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:GetKeywordResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="GetPictureRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="domainlist" type="tns:ArrayOfString"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="GetPictureResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:GetPictureResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="GetPictureResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="pictureId" type="xsd:int"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="GetPreviewLinkRequest">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="keyword" type="xsd:string"/>
   <xsd:element name="template" type="xsd:int"/>
   <xsd:element name="searchbox" type="xsd:string"/>
   <xsd:element name="relatedlinks" type="xsd:string"/>
   <xsd:element name="market" type="xsd:string"/>
   <xsd:element name="twoclick" type="xsd:int"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="GetPreviewLinkResponse">
  <xsd:all>
   <xsd:element name="preview" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="GetRelatedLinksRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="market" type="xsd:string"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="GetRelatedLinksResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="market" type="xsd:string"/>
   <xsd:element name="keyword" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="GetRelatedLinksResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:GetRelatedLinksResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="PortfolioStatisticsRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
   <xsd:element name="type" type="xsd:int"/>
   <xsd:element name="portfolioname" type="xsd:string"/>
   <xsd:element name="periode" type="xsd:int"/>
   <xsd:element name="date" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="PortfolioStatisticsResponse">
  <xsd:all>
   <xsd:element name="portfolioname" type="xsd:string"/>
   <xsd:element name="type" type="xsd:int"/>
   <xsd:element name="periode" type="xsd:int"/>
   <xsd:element name="date" type="xsd:string"/>
   <xsd:element name="views" type="xsd:int"/>
   <xsd:element name="clicks" type="xsd:int"/>
   <xsd:element name="earnings" type="xsd:double"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="ResetPictureRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="domainlist" type="tns:ArrayOfString"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="ResetPictureResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:ResetPictureResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="ResetPictureResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="pictureId" type="xsd:int"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="ResetTemplateEntry">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="ResetTemplateRequestArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:ResetTemplateEntry[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="ResetTemplateRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="templateentry" type="tns:ResetTemplateRequestArray"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="ResetTemplateResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="template" type="xsd:int"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="ResetTemplateResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:ResetTemplateResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="SetKeywordEntry">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="keyword" type="xsd:string"/>
   <xsd:element name="market" type="xsd:string"/>
   <xsd:element name="advertiser" type="xsd:int"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="SetKeywordRequestArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:SetKeywordEntry[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="SetKeywordRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="keywordentry" type="tns:SetKeywordRequestArray"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="SetKeywordResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="keyword" type="xsd:string"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="SetKeywordResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:SetKeywordResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="SetKeywordEntryForMarkets">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="keyword" type="xsd:string"/>
   <xsd:element name="advertiser" type="xsd:int"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="SetKeywordForMarketsRequestArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:SetKeywordEntryForMarkets[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="SetKeywordForMarketsRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="keywordentry" type="tns:SetKeywordForMarketsRequestArray"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="KeywordEntryForMarketsData">
  <xsd:all>
   <xsd:element name="market" type="xsd:string"/>
   <xsd:element name="keyword" type="xsd:string"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="KeywordEntryForMarketsDataArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:KeywordEntryForMarketsData[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="SetKeywordResponseForMarkets">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="marketdata" type="tns:KeywordEntryForMarketsDataArray"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="SetKeywordResponseForMarketsArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:SetKeywordResponseForMarkets[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="SetPictureRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="domainlistArray" type="tns:SetPictureRequestArray"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="SetPictureRequestArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:SetPictureEntry[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="SetPictureEntry">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="pictureId" type="xsd:int"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="SetPictureResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:SetPictureResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="SetPictureResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="pictureId" type="xsd:int"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="RelatedLinksEntry">
  <xsd:all>
   <xsd:element name="keyword" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="RelatedLinksEntryArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:RelatedLinksEntry[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="SetRelatedLinksRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="market" type="xsd:string"/>
   <xsd:element name="relatedlinksdata" type="tns:RelatedLinksEntryArray"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="SetRelatedLinksResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="market" type="xsd:string"/>
   <xsd:element name="keyword" type="xsd:string"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="SetRelatedLinksResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:SetRelatedLinksResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="SetTemplateEntry">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="template" type="xsd:int"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="SetTemplateRequestArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:SetTemplateEntry[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="SetTemplateRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="templateentry" type="tns:SetTemplateRequestArray"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="SetTemplateResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="template" type="xsd:int"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="SetTemplateResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:SetTemplateResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="GetTemplateRequest">
  <xsd:all>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="domainlist" type="tns:ArrayOfString"/>
   <xsd:element name="partnerid" type="xsd:int"/>
   <xsd:element name="signkey" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="GetTemplateResponseArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:GetTemplateResponse[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="GetTemplateResponse">
  <xsd:all>
   <xsd:element name="domain" type="xsd:string"/>
   <xsd:element name="templateId" type="xsd:int"/>
   <xsd:element name="status" type="xsd:string"/>
   <xsd:element name="message" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="GetParkingTemplateList">
  <xsd:all>
   <xsd:element name="id" type="xsd:int"/>
   <xsd:element name="name" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="GetParkingTemplateListArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:GetParkingTemplateList[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
</xsd:schema>
</types>
<message name="GetRelatedLinksRequest">
  <part name="member" type="tns:GetRelatedLinksRequest" /></message>
<message name="GetRelatedLinksResponse">
  <part name="return" type="tns:GetRelatedLinksResponseArray" /></message>
<message name="SetRelatedLinksRequest">
  <part name="member" type="tns:SetRelatedLinksRequest" /></message>
<message name="SetRelatedLinksResponse">
  <part name="return" type="tns:SetRelatedLinksResponseArray" /></message>
<message name="PortfolioStatisticsRequest">
  <part name="member" type="tns:PortfolioStatisticsRequest" /></message>
<message name="PortfolioStatisticsResponse">
  <part name="return" type="tns:PortfolioStatisticsResponse" /></message>
<message name="DisplayPortfolioDomainsMoreThenOneRequest">
  <part name="member" type="tns:DisplayPortfolioDomainsMoreThenOneRequest" /></message>
<message name="DisplayPortfolioDomainsMoreThenOneResponse">
  <part name="return" type="tns:DisplayPortfolioDomainsMoreThenOneResponseArray" /></message>
<message name="DisplayPortfolioDomainsNotInRequest">
  <part name="member" type="tns:DisplayPortfolioDomainsNotInRequest" /></message>
<message name="DisplayPortfolioDomainsNotInResponse">
  <part name="return" type="tns:DisplayPortfolioDomainsNotInResponseArray" /></message>
<message name="DisplayPortfolioDomainsRequest">
  <part name="member" type="tns:DisplayPortfolioDomainsRequest" /></message>
<message name="DisplayPortfolioDomainsResponse">
  <part name="return" type="tns:DisplayPortfolioDomainsResponseArray" /></message>
<message name="DisplayPortfoliosRequest">
  <part name="member" type="tns:DisplayPortfoliosRequest" /></message>
<message name="DisplayPortfoliosResponse">
  <part name="return" type="tns:DisplayPortfoliosResponseArray" /></message>
<message name="AddPortfolioDomainRequest">
  <part name="member" type="tns:AddPortfolioDomainRequest" /></message>
<message name="AddPortfolioDomainResponse">
  <part name="return" type="tns:AddPortfolioDomainResponseArray" /></message>
<message name="DeletePortfolioDomainRequest">
  <part name="member" type="tns:DeletePortfolioDomainRequest" /></message>
<message name="DeletePortfolioDomainResponse">
  <part name="return" type="tns:DeletePortfolioDomainResponseArray" /></message>
<message name="DeletePortfolioRequest">
  <part name="member" type="tns:DeletePortfolioRequest" /></message>
<message name="DeletePortfolioResponse">
  <part name="return" type="tns:DeletePortfolioResponse" /></message>
<message name="CreatePortfolioRequest">
  <part name="member" type="tns:CreatePortfolioRequest" /></message>
<message name="CreatePortfolioResponse">
  <part name="return" type="tns:CreatePortfolioResponseArray" /></message>
<message name="CheckMemberRequest">
  <part name="member" type="tns:CheckMemberRequest" /></message>
<message name="CheckMemberResponse">
  <part name="return" type="xsd:int" /></message>
<message name="CheckAvailableRegistrationRequest">
  <part name="member" type="tns:CheckAvailableRegistrationRequest" /></message>
<message name="CheckAvailableRegistrationResponse">
  <part name="return" type="xsd:bool" /></message>
<message name="CreateAccountRequest">
  <part name="newaccount" type="tns:CreateAccountRequest" /></message>
<message name="CreateAccountResponse">
  <part name="return" type="xsd:int" /></message>
<message name="GetAccountDataRequest">
  <part name="member" type="tns:AccountDataRequest" /></message>
<message name="GetAccountDataResponse">
  <part name="return" type="tns:AccountDataResponse" /></message>
<message name="EditAccountRequest">
  <part name="member" type="tns:EditAccountRequest" /></message>
<message name="EditAccountResponse">
  <part name="return" type="tns:EditAccountResponse" /></message>
<message name="ChangePasswordRequest">
  <part name="member" type="tns:ChangePasswordRequest" /></message>
<message name="ChangePasswordResponse">
  <part name="return" type="xsd:int" /></message>
<message name="GetBankDataRequest">
  <part name="member" type="tns:BankDataRequest" /></message>
<message name="GetBankDataResponse">
  <part name="return" type="tns:BankDataResponse" /></message>
<message name="EditBankDataRequest">
  <part name="member" type="tns:EditBankDataRequest" /></message>
<message name="EditBankDataResponse">
  <part name="return" type="xsd:int" /></message>
<message name="DomainStatusRequest">
  <part name="list" type="tns:DomainStatusRequest" /></message>
<message name="DomainStatusResponse">
  <part name="return" type="tns:DomainStatusResponseArray" /></message>
<message name="DomainSearchRequest">
  <part name="searchquery" type="tns:DomainSearchRequest" /></message>
<message name="DomainSearchResponse">
  <part name="return" type="tns:DomainSearchResponseArray" /></message>
<message name="DomainParkingFinalStatisticsRequest">
  <part name="statisticsrequest" type="tns:DomainParkingFinalStatisticsRequest" /></message>
<message name="DomainParkingFinalStatisticsResponse">
  <part name="return" type="tns:ParkingFinalStatisticsArray" /></message>
<message name="DomainParkingPaymentsRequest">
  <part name="statisticsrequest" type="tns:DomainParkingPaymentsRequest" /></message>
<message name="DomainParkingPaymentsResponse">
  <part name="return" type="tns:DomainParkingPaymentsArray" /></message>
<message name="DomainListRequest">
  <part name="listdomains" type="tns:DomainListRequest" /></message>
<message name="DomainListResponse">
  <part name="return" type="tns:DomainListResponseArray" /></message>
<message name="DomainListExtendedRequest">
  <part name="listdomains" type="tns:DomainListExtRequest" /></message>
<message name="DomainListExtendedResponse">
  <part name="return" type="tns:DomainListExtResponseArray" /></message>
<message name="DomainInsertRequest">
  <part name="member" type="tns:DomainInsertRequest" /></message>
<message name="DomainInsertResponse">
  <part name="return" type="tns:DomainInsertResponseArray" /></message>
<message name="DomainEditRequest">
  <part name="member" type="tns:DomainEditRequest" /></message>
<message name="DomainEditResponse">
  <part name="return" type="tns:DomainEditResponseArray" /></message>
<message name="DomainDeleteRequest">
  <part name="member" type="tns:DomainDeleteRequest" /></message>
<message name="DomainDeleteResponse">
  <part name="return" type="tns:DomainDeleteResponseArray" /></message>
<message name="DomainElementsRequest">
  <part name="elements" type="tns:DomainElementsRequest" /></message>
<message name="DomainElementsResponse">
  <part name="return" type="tns:DomainElementsResponseArray" /></message>
<message name="GetDomainSetupRequest">
  <part name="elements" type="tns:GetDomainSetupRequest" /></message>
<message name="GetDomainSetupResponse">
  <part name="return" type="tns:GetDomainSetupResponseArray" /></message>
<message name="SetDomainSetupRequest">
  <part name="elements" type="tns:SetDomainSetupRequest" /></message>
<message name="SetDomainSetupResponse">
  <part name="return" type="tns:SetDomainSetupResponseArray" /></message>
<message name="CheckBlacklistRequest">
  <part name="blacklist" type="tns:CheckBlacklistRequest" /></message>
<message name="CheckBlacklistResponse">
  <part name="return" type="tns:CheckBlacklistResponseArray" /></message>
<message name="GetPreviewLinkRequest">
  <part name="elements" type="tns:GetPreviewLinkRequest" /></message>
<message name="GetPreviewLinkResponse">
  <part name="return" type="tns:GetPreviewLinkResponse" /></message>
<message name="SetKeywordRequest">
  <part name="member" type="tns:SetKeywordRequest" /></message>
<message name="SetKeywordResponse">
  <part name="return" type="tns:SetKeywordResponseArray" /></message>
<message name="SetKeywordForTopMarketsRequest">
  <part name="member" type="tns:SetKeywordForMarketsRequest" /></message>
<message name="SetKeywordForTopMarketsResponse">
  <part name="return" type="tns:SetKeywordResponseForMarketsArray" /></message>
<message name="GetKeywordRequest">
  <part name="member" type="tns:GetKeywordRequest" /></message>
<message name="GetKeywordResponse">
  <part name="return" type="tns:GetKeywordResponseArray" /></message>
<message name="GetTemplateRequest">
  <part name="input" type="tns:GetTemplateRequest" /></message>
<message name="GetTemplateResponse">
  <part name="return" type="tns:GetTemplateResponseArray" /></message>
<message name="SetTemplateRequest">
  <part name="template" type="tns:SetTemplateRequest" /></message>
<message name="SetTemplateResponse">
  <part name="return" type="tns:SetTemplateResponseArray" /></message>
<message name="GetParkingTemplateListRequest"></message>
<message name="GetParkingTemplateListResponse">
  <part name="return" type="tns:GetParkingTemplateList" /></message>
<message name="ResetTemplateRequest">
  <part name="template" type="tns:ResetTemplateRequest" /></message>
<message name="ResetTemplateResponse">
  <part name="return" type="tns:ResetTemplateResponseArray" /></message>
<message name="GetPictureRequest">
  <part name="input" type="tns:GetPictureRequest" /></message>
<message name="GetPictureResponse">
  <part name="return" type="tns:GetPictureResponseArray" /></message>
<message name="SetPictureRequest">
  <part name="input" type="tns:SetPictureRequest" /></message>
<message name="SetPictureResponse">
  <part name="return" type="tns:SetPictureResponseArray" /></message>
<message name="ResetPictureRequest">
  <part name="input" type="tns:ResetPictureRequest" /></message>
<message name="ResetPictureResponse">
  <part name="return" type="tns:ResetPictureResponseArray" /></message>
<portType name="SedoInterfacePortType">
  <operation name="GetRelatedLinks">
    <documentation>Get related links for one domain</documentation>
    <input message="tns:GetRelatedLinksRequest"/>
    <output message="tns:GetRelatedLinksResponse"/>
  </operation>
  <operation name="SetRelatedLinks">
    <documentation>Set related links for one domain</documentation>
    <input message="tns:SetRelatedLinksRequest"/>
    <output message="tns:SetRelatedLinksResponse"/>
  </operation>
  <operation name="PortfolioStatistics">
    <documentation>Display statistics for portfolios</documentation>
    <input message="tns:PortfolioStatisticsRequest"/>
    <output message="tns:PortfolioStatisticsResponse"/>
  </operation>
  <operation name="DisplayPortfolioDomainsMoreThenOne">
    <documentation>Display all domains existing in more then one portfolios</documentation>
    <input message="tns:DisplayPortfolioDomainsMoreThenOneRequest"/>
    <output message="tns:DisplayPortfolioDomainsMoreThenOneResponse"/>
  </operation>
  <operation name="DisplayPortfolioDomainsNotIn">
    <documentation>Display all domains not existing in portfolios</documentation>
    <input message="tns:DisplayPortfolioDomainsNotInRequest"/>
    <output message="tns:DisplayPortfolioDomainsNotInResponse"/>
  </operation>
  <operation name="DisplayPortfolioDomains">
    <documentation>Display all domains in one portfolio</documentation>
    <input message="tns:DisplayPortfolioDomainsRequest"/>
    <output message="tns:DisplayPortfolioDomainsResponse"/>
  </operation>
  <operation name="DisplayPortfolios">
    <documentation>Display all existing portfolios</documentation>
    <input message="tns:DisplayPortfoliosRequest"/>
    <output message="tns:DisplayPortfoliosResponse"/>
  </operation>
  <operation name="AddPortfolioDomain">
    <documentation>Add Domain to existing Portfolio</documentation>
    <input message="tns:AddPortfolioDomainRequest"/>
    <output message="tns:AddPortfolioDomainResponse"/>
  </operation>
  <operation name="DeletePortfolioDomain">
    <documentation>Delete domain from existing Portfolio</documentation>
    <input message="tns:DeletePortfolioDomainRequest"/>
    <output message="tns:DeletePortfolioDomainResponse"/>
  </operation>
  <operation name="DeletePortfolio">
    <documentation>Create new Portfolio</documentation>
    <input message="tns:DeletePortfolioRequest"/>
    <output message="tns:DeletePortfolioResponse"/>
  </operation>
  <operation name="CreatePortfolio">
    <documentation>Create new Portfolio</documentation>
    <input message="tns:CreatePortfolioRequest"/>
    <output message="tns:CreatePortfolioResponse"/>
  </operation>
  <operation name="CheckMember">
    <documentation>Look if member is part of Sedo</documentation>
    <input message="tns:CheckMemberRequest"/>
    <output message="tns:CheckMemberResponse"/>
  </operation>
  <operation name="CheckAvailableRegistration">
    <documentation>Look if member is part of Sedo</documentation>
    <input message="tns:CheckAvailableRegistrationRequest"/>
    <output message="tns:CheckAvailableRegistrationResponse"/>
  </operation>
  <operation name="CreateAccount">
    <documentation>Create new member account on Sedo</documentation>
    <input message="tns:CreateAccountRequest"/>
    <output message="tns:CreateAccountResponse"/>
  </operation>
  <operation name="GetAccountData">
    <documentation>Get the complete data of a Sedo member</documentation>
    <input message="tns:GetAccountDataRequest"/>
    <output message="tns:GetAccountDataResponse"/>
  </operation>
  <operation name="EditAccount">
    <documentation>Edit the account data of a Sedo member</documentation>
    <input message="tns:EditAccountRequest"/>
    <output message="tns:EditAccountResponse"/>
  </operation>
  <operation name="ChangePassword">
    <documentation>Change password of a member</documentation>
    <input message="tns:ChangePasswordRequest"/>
    <output message="tns:ChangePasswordResponse"/>
  </operation>
  <operation name="GetBankData">
    <documentation>BankData of a Sedo member</documentation>
    <input message="tns:GetBankDataRequest"/>
    <output message="tns:GetBankDataResponse"/>
  </operation>
  <operation name="EditBankData">
    <documentation>Edit BankData of a Sedo member</documentation>
    <input message="tns:EditBankDataRequest"/>
    <output message="tns:EditBankDataResponse"/>
  </operation>
  <operation name="DomainStatus">
    <documentation>Check the status of a Domain</documentation>
    <input message="tns:DomainStatusRequest"/>
    <output message="tns:DomainStatusResponse"/>
  </operation>
  <operation name="DomainSearch">
    <documentation>Search the SedoDB of a keyword and recieve list of domainnames</documentation>
    <input message="tns:DomainSearchRequest"/>
    <output message="tns:DomainSearchResponse"/>
  </operation>
  <operation name="DomainParkingFinalStatistics">
    <documentation>Get your domain parking final statistics</documentation>
    <input message="tns:DomainParkingFinalStatisticsRequest"/>
    <output message="tns:DomainParkingFinalStatisticsResponse"/>
  </operation>
  <operation name="DomainParkingPayments">
    <documentation>Get your parking payout statistics</documentation>
    <input message="tns:DomainParkingPaymentsRequest"/>
    <output message="tns:DomainParkingPaymentsResponse"/>
  </operation>
  <operation name="DomainList">
    <documentation>Get all domains of a member</documentation>
    <input message="tns:DomainListRequest"/>
    <output message="tns:DomainListResponse"/>
  </operation>
  <operation name="DomainListExtended">
    <documentation>Get all domains of a member reloadet</documentation>
    <input message="tns:DomainListExtendedRequest"/>
    <output message="tns:DomainListExtendedResponse"/>
  </operation>
  <operation name="DomainInsert">
    <documentation>Insert domains on Sedo</documentation>
    <input message="tns:DomainInsertRequest"/>
    <output message="tns:DomainInsertResponse"/>
  </operation>
  <operation name="DomainEdit">
    <documentation>Edit domains on Sedo</documentation>
    <input message="tns:DomainEditRequest"/>
    <output message="tns:DomainEditResponse"/>
  </operation>
  <operation name="DomainDelete">
    <documentation>Delete domains on Sedo</documentation>
    <input message="tns:DomainDeleteRequest"/>
    <output message="tns:DomainDeleteResponse"/>
  </operation>
  <operation name="DomainElements">
    <documentation>Change domain parking elements</documentation>
    <input message="tns:DomainElementsRequest"/>
    <output message="tns:DomainElementsResponse"/>
  </operation>
  <operation name="GetDomainSetup">
    <documentation>Get domain setup fields</documentation>
    <input message="tns:GetDomainSetupRequest"/>
    <output message="tns:GetDomainSetupResponse"/>
  </operation>
  <operation name="SetDomainSetup">
    <documentation>Set domain setup fields</documentation>
    <input message="tns:SetDomainSetupRequest"/>
    <output message="tns:SetDomainSetupResponse"/>
  </operation>
  <operation name="CheckBlacklist">
    <documentation>Check if domain is blacklisted</documentation>
    <input message="tns:CheckBlacklistRequest"/>
    <output message="tns:CheckBlacklistResponse"/>
  </operation>
  <operation name="GetPreviewLink">
    <documentation>Get parking preview link</documentation>
    <input message="tns:GetPreviewLinkRequest"/>
    <output message="tns:GetPreviewLinkResponse"/>
  </operation>
  <operation name="SetKeyword">
    <documentation>Set Master Keywords on Domain</documentation>
    <input message="tns:SetKeywordRequest"/>
    <output message="tns:SetKeywordResponse"/>
  </operation>
  <operation name="SetKeywordForTopMarkets">
    <documentation>Set Master Keywords on Domain for the top 3 markets</documentation>
    <input message="tns:SetKeywordForTopMarketsRequest"/>
    <output message="tns:SetKeywordForTopMarketsResponse"/>
  </operation>
  <operation name="GetKeyword">
    <documentation>Get Master Keywords for Domain</documentation>
    <input message="tns:GetKeywordRequest"/>
    <output message="tns:GetKeywordResponse"/>
  </operation>
  <operation name="GetTemplate">
    <documentation>Get template id for domain name</documentation>
    <input message="tns:GetTemplateRequest"/>
    <output message="tns:GetTemplateResponse"/>
  </operation>
  <operation name="SetTemplate">
    <documentation>Set Template on Domain</documentation>
    <input message="tns:SetTemplateRequest"/>
    <output message="tns:SetTemplateResponse"/>
  </operation>
  <operation name="GetParkingTemplateList">
    <documentation>Get Parking Template List</documentation>
    <input message="tns:GetParkingTemplateListRequest"/>
    <output message="tns:GetParkingTemplateListResponse"/>
  </operation>
  <operation name="ResetTemplate">
    <documentation>Reset Template on Domain</documentation>
    <input message="tns:ResetTemplateRequest"/>
    <output message="tns:ResetTemplateResponse"/>
  </operation>
  <operation name="GetPicture">
    <documentation>Get picture id for domain name</documentation>
    <input message="tns:GetPictureRequest"/>
    <output message="tns:GetPictureResponse"/>
  </operation>
  <operation name="SetPicture">
    <documentation>Set picture id for domain name</documentation>
    <input message="tns:SetPictureRequest"/>
    <output message="tns:SetPictureResponse"/>
  </operation>
  <operation name="ResetPicture">
    <documentation>Reset picture id for domain name</documentation>
    <input message="tns:ResetPictureRequest"/>
    <output message="tns:ResetPictureResponse"/>
  </operation>
</portType>
<binding name="SedoInterfaceBinding" type="tns:SedoInterfacePortType">
  <soap:binding style="rpc" transport="http://schemas.xmlsoap.org/soap/http"/>
  <operation name="GetRelatedLinks">
    <soap:operation soapAction="urn:SedoInterface#GetRelatedLinks" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="SetRelatedLinks">
    <soap:operation soapAction="urn:SedoInterface#SetRelatedLinks" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="PortfolioStatistics">
    <soap:operation soapAction="urn:SedoInterface#PortfolioStatistics" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="DisplayPortfolioDomainsMoreThenOne">
    <soap:operation soapAction="urn:SedoInterface#DisplayPortfolioDomainsMoreThenOne" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="DisplayPortfolioDomainsNotIn">
    <soap:operation soapAction="urn:SedoInterface#DisplayPortfolioDomainsNotIn" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="DisplayPortfolioDomains">
    <soap:operation soapAction="urn:SedoInterface#DisplayPortfolioDomains" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="DisplayPortfolios">
    <soap:operation soapAction="urn:SedoInterface#DisplayPortfolios" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="AddPortfolioDomain">
    <soap:operation soapAction="urn:SedoInterface#AddPortfolioDomain" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="DeletePortfolioDomain">
    <soap:operation soapAction="urn:SedoInterface#DeletePortfolioDomain" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="DeletePortfolio">
    <soap:operation soapAction="urn:SedoInterface#CreatePortfolio" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="CreatePortfolio">
    <soap:operation soapAction="urn:SedoInterface#CreatePortfolio" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="CheckMember">
    <soap:operation soapAction="urn:SedoInterface#CheckMember" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="CheckAvailableRegistration">
    <soap:operation soapAction="urn:SedoInterface#CheckAvailableRegistration" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="CreateAccount">
    <soap:operation soapAction="urn:SedoInterface#CreateAccount" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="GetAccountData">
    <soap:operation soapAction="urn:SedoInterface#GetAccountData" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="EditAccount">
    <soap:operation soapAction="urn:SedoInterface#EditAccount" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="ChangePassword">
    <soap:operation soapAction="urn:SedoInterface#ChangePassword" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="GetBankData">
    <soap:operation soapAction="urn:SedoInterface#GetBankData" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="EditBankData">
    <soap:operation soapAction="urn:SedoInterface#BankData" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="DomainStatus">
    <soap:operation soapAction="urn:SedoInterface#DomainStatus" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="DomainSearch">
    <soap:operation soapAction="urn:SedoInterface#DomainSearch" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="DomainParkingFinalStatistics">
    <soap:operation soapAction="urn:SedoInterface#DomainParkingFinalStatistics" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="DomainParkingPayments">
    <soap:operation soapAction="urn:SedoInterface#DomainParkingPayments" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="DomainList">
    <soap:operation soapAction="urn:SedoInterface#DomainList" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="DomainListExtended">
    <soap:operation soapAction="urn:SedoInterface#DomainListExtended" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="DomainInsert">
    <soap:operation soapAction="urn:SedoInterface#DomainInsert" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="DomainEdit">
    <soap:operation soapAction="urn:SedoInterface#DomainEdit" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="DomainDelete">
    <soap:operation soapAction="urn:SedoInterface#DomainDelete" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="DomainElements">
    <soap:operation soapAction="urn:SedoInterface#DomainElements" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="GetDomainSetup">
    <soap:operation soapAction="urn:SedoInterface#GetDomainSetup" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="SetDomainSetup">
    <soap:operation soapAction="urn:SedoInterface#SetDomainSetup" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="CheckBlacklist">
    <soap:operation soapAction="urn:SedoInterface#CheckBlacklist" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="GetPreviewLink">
    <soap:operation soapAction="urn:SedoInterface#GetPreviewLink" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="SetKeyword">
    <soap:operation soapAction="urn:SedoInterface#SetKeyword" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="SetKeywordForTopMarkets">
    <soap:operation soapAction="urn:SedoInterface#SetKeywordForTopMarkets" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="GetKeyword">
    <soap:operation soapAction="urn:SedoInterface#GetKeyword" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="GetTemplate">
    <soap:operation soapAction="urn:SedoInterface#GetTemplate" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="SetTemplate">
    <soap:operation soapAction="urn:SedoInterface#SetTemplate" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="GetParkingTemplateList">
    <soap:operation soapAction="urn:SedoInterface#GetParkingTemplateList" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="ResetTemplate">
    <soap:operation soapAction="urn:SedoInterface#ResetTemplate" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="GetPicture">
    <soap:operation soapAction="urn:SedoInterface#GetPicture" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="SetPicture">
    <soap:operation soapAction="urn:SedoInterface#SetPicture" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="ResetPicture">
    <soap:operation soapAction="urn:SedoInterface#ResetPicture" style="rpc"/>
    <input><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="urn:SedoInterface" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
</binding>
<service name="SedoInterface">
  <port name="SedoInterfacePort" binding="tns:SedoInterfaceBinding">
    <soap:address location="http://api.sedo.com/api/sedointerface.php"/>
  </port>
</service>
</definitions>