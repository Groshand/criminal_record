@extends('layout.user')

@section('user')
    <style>
        @import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
        body{margin-top:20px; background-color: white;}

        .fa-fw {width: 2em;}


        .list-group {

            margin:auto;
            float:left;
            padding-top:20px;
        }





    </style>
    <script>
        $(document).ready(function()
        {
            var navItems = $('.admin-menu li > a');
            var navListItems = $('.admin-menu li');
            var allWells = $('.admin-content');
            var allWellsExceptFirst = $('.admin-content:not(:first)');

            allWellsExceptFirst.hide();
            navItems.click(function(e)
            {
                e.preventDefault();
                navListItems.removeClass('active');
                $(this).closest('li').addClass('active');

                allWells.hide();
                var target = $(this).attr('data-target-id');
                $('#' + target).show();
            });
        });


        $(document).ready(function() {


            $('.list-group-item').click(function(e) {
                e.preventDefault();
                $('.list-group-item').removeClass('active');
                $(this).addClass('active');
            });
        });





    </script>

    <div class=" container ">
        <div class="row">
            <div class="list-group col-md-3 admin-menu mt-0">
                <ul class="nav-pills admin-menu fa-ul">
                    <li><h3 class=" d-flex justify-content-center " >Type of Crime</h3></li>
                    <li><a  class="list-group-item active bg-dark d-flex justify-content-center" data-target-id="Antisocial_behaviour">Anti-social behaviour</a></li>
                    <li><a  class="list-group-item active bg-dark d-flex justify-content-center" data-target-id="Arson">Arson (Firing)</a></li>
                    <li><a  class="list-group-item active bg-dark d-flex justify-content-center" data-target-id="Childhood_abuse">Childhood abuse</a></li>
                    <li><a  class="list-group-item active bg-dark d-flex justify-content-center" data-target-id="Cyber_crime">Cyber crime</a></li>
                    <li><a  class="list-group-item active bg-dark d-flex justify-content-center" data-target-id="Domestic_abuse">Domestic abuse</a></li>
                    <li><a  class="list-group-item active bg-dark d-flex justify-content-center" data-target-id="Fraud">Fraud</a></li>
                    <li><a  class="list-group-item active bg-dark d-flex justify-content-center" data-target-id="Hate_crime">Hate crime</a></li>
                    <li><a  class="list-group-item active bg-dark d-flex justify-content-center" data-target-id="Murder_or_manslaughter">Murder</a></li>
                    <li><a  class="list-group-item active bg-dark d-flex justify-content-center" data-target-id="Robbery">Robbery</a></li>
                    <li><a  class="list-group-item active bg-dark d-flex justify-content-center" data-target-id="Sexual_harassment">Sexual harassment</a></li>
                    <li><a  class="list-group-item active bg-dark d-flex justify-content-center" data-target-id="Stalking_and_harassment">Stalking and harassment</a></li>
                    <li><a  class="list-group-item active bg-dark d-flex justify-content-center" data-target-id="Terrorism">Terrorism</a></li>
                    <li><a  class="list-group-item active bg-dark d-flex justify-content-center" data-target-id="Violent_crime">Violent crime</a></li>

                </ul>

            </div>
            <div class="col-md-9 ">
                <div class="container  border border-light py-2 my-5 rounded d-flex justify-content-left">
                    <div class="col-md-12 well admin-content" id="Antisocial_behaviour">
                        <h3 class=" col-md-9 list-group-item list-group-item-secondary">Antisocial behaviour</h3>
                        <br>
                        <p>Do you feel worried about what’s going on in your neighbourhood or intimidated by a neighbour’s behaviour? Antisocial behaviour (ASB) affects lots of people and can have an impact on you, your home and your community. If you’re experiencing antisocial behaviour you don’t have to cope on your own - we can help you deal with it.</p>
                        <br>
                        <h5>What is antisocial behaviour?</h5>
                        <p>If your quality of life is badly affected by other people in your community then you could be a victim of antisocial behaviour. We have experience of supporting people dealing with:</p>
                        <ul>
                            <li>noise nuisance</li>
                            <li>neighbour disputes</li>
                            <li>verbal abuse</li>
                            <li>threatening behaviour</li>
                            <li>harassment and intimidation</li>
                            <li>vandalism</li>
                            <li>criminal damage.</li>
                        </ul>
                        <p>You might think that an incident is small or unimportant to start with, but antisocial behaviour can go on for a long time, and become very serious. Not all antisocial behaviour is classed as crime but a lot is, or can become a crime. We can help you even if the police are not involved, but nothing will change if you don’t take action. You may not know how to do this, but we can give you the information and support you need to change things.</p>
                        <h5>The impact of antisocial behaviour</h5>
                        <p>Anyone can experience antisocial behaviour and it can affect you in many ways. You may find that:</p>
                        <ul>
                            <li>you can’t sleep</li>
                            <li>you feel anxious and constantly on edge</li>
                            <li>you are frightened to go out</li>
                            <li>you don’t feel safe in your own home</li>
                            <li>your children are upset</li>
                            <li>you change your routine to avoid problems</li>
                            <li>you want to move</li>
                            <li>you can’t talk to anyone about it</li>
                            <li>you feel you must have done something to cause it</li>
                            <li>you think nothing will change and it will never end.</li>
                        </ul>
                    </div>
                    <div class="col-md-12 well admin-content" id="Arson">
                        <h3 class=" col-md-9 list-group-item list-group-item-secondary">Arson</h3>
                        <br>
                        <p>Arson is when someone deliberately sets fire to someone else's property to damage it or to injure people.</p>
                        <p>The maximum penalty for anyone found guilty of arson is imprisonment for life. This is because of the exceptional danger involved – victims may lose all their property, be made homeless, injured, or suffer a very painful death. Even if nobody is physically hurt, you may still have to cope with financial damage.</p>
                        <h5>Practical information</h5>
                        <p>If you’ve been affected by arson, there are some things you can do to help prevent further attacks:</p>
                        <ul>

                            <li>If your property has been damaged, it’s a good idea to get it repaired quickly if you can. Vandalised property can attract people who might cause more damage.</li>
                            <li>Keep a record of all events that you think are related to the arson attack or any subsequent criminal damage or harassment. Note as much detail as possible, including the date and time of incidents.</li>
                            <li>If possible, try to get photographic or video evidence. But only do this carefully and without putting yourself at risk – some offenders could react violently to being photographed or filmed.</li>
                            <li>It’s a good idea to look at your home security and upgrade it if necessary. Contact us and we might be able to help you arrange that.</li>

                        </ul>
                    </div>
                    <div class="col-md-12 well admin-content" id="Childhood_abuse">
                        <h3 class=" col-md-9 list-group-item list-group-item-secondary">Childhood abuse</h3>
                        <br>
                        <p>Child abuse can happen in different ways, and can include neglect as well as physical, emotional and sexual abuse. In many cases, people experience more than one type of abuse.</p>
                        <p>Often, people abuse others because they want power and control over them. If you were abused as a child, it's important to remember that it’s not your fault or because of anything that you did. Abusive behaviour towards children is always wrong and never the child’s fault.</p>
                        <p>We know that around one in four adults, both male and female, has experienced abuse as a child. Some find that with the support of their family and friends they are able to move on from their childhood abuse. But for many survivors, talking about the abuse to someone who is professional, caring and independent, from an organisation that helps survivors, such as Victim Support, is an essential step. We can help you to develop the coping strategies you may need to manage the overwhelming feelings that the impact of childhood abuse can have in adulthood.</p>
                        <h5>Impact of childhood abuse</h5>
                        <p>Everyone is different. It’s not easy to know exactly how you will feel as an adult living with past experiences of being abused. You may have reported the abuse as a child, lived with it in secret for years, or only recently remembered the abuse you experienced. However, it’s possible that at some time in your adult life your memories or fears will come back, which can lead to some very intense emotions.</p>

                        <p>Different life experiences can trigger these emotions, including bereavement, becoming a parent, experiencing an unrelated crime, moving to a new area, and current news stories in the media.</p>

                        <h6>Emotional health</h6>
                        <p>Not everybody who has experienced childhood abuse will also experience emotional or mental health difficulties. However, it’s estimated that over 50% of people may have the following symptoms that last into adulthood:</p>
                        <ul>
                            <li>anxiety</li>
                            <li>depression</li>
                            <li>post-traumatic stress</li>
                            <li>sleep disorders</li>
                            <li>self-harm and/or suicidal thoughts.</li>
                        </ul>
                        <h6>Physical health</h6>
                        <p>Childhood abuse is associated with poorer physical health in adulthood. You may find it more difficult to go to your local GP, hospital or dentist to get help for general medical issues or a check-up because of not wanting to be touched or asked questions.</p>
                        <h5>Struggling to cope</h5>
                        <p>Some people find it very difficult to deal with the intimate aspects of childhood abuse, especially when they have to talk to other people about what happened. They may have kept their experiences secret for years and are worried about the effect that ‘going public’ will have on their family and other people around them.</p>

                        <p>If you were abused by someone you know or love, the effects may be even greater. As well as the experience itself, you’ve had your trust broken at an early point in your life; this can have lasting negative effects on your relationships with other people and be a barrier to developing a positive sexual identity.</p>

                        <p>Abuse in childhood can also leave you feeling very confused; you may be questioning your own memories of the abuse, or wondering if you could have done something to stop what happened. It’s important to remember that you were a child and the abuser manipulated you in order to harm you.</p>

                        <p>Survivors may also feel guilty because as a result of abuse, they have engaged in risk taking or unhealthy behaviours. These may include alcohol or substance abuse, criminal activity or avoiding medical help. These are common responses to childhood abuse, and support services will understand this and help you develop more positive coping strategies.</p>
                    </div>
                    <div class="col-md-12 well admin-content" id="Cyber_crime">
                        <h3 class=" col-md-9 list-group-item list-group-item-secondary">Cyber crime</h3>
                        <br><p>The term cyber crime refers to a variety of crimes carried out online, using the internet through computers, laptops, tablets, internet-enabled televisions, games consoles and smart phones.
                        </p><p>
                            Cyber-enacted crimes can only be committed on the internet - stealing confidential information that’s stored online, for example. Other crimes which are carried out online, but could be committed without the use of the internet, such as sexual grooming, stalking or harassment, bullying, and financial or romance fraud, are called cyber-enabled crimes.
                        </p>
                        <h5>Why people commit cyber crime</h5>
                        <p>Committing crimes online allows someone to hide their identity and location, which in some cases is thousands of miles away. People who commit cyber crimes are often well organised and believable online. Many cyber crimes are committed by offenders who may be thousands of miles away, which makes it difficult for police and other law enforcement agencies to bring them to justice.
                        </p><p>
                        If you’ve been tricked into handing over your personal details or goods, it’s unlikely that you will be able to recover anything stolen by the offender, unless a fraudulent payment qualifies for a refund from your bank or credit card company. If the offender is arrested, goes to court and is convicted, the court will have the power to order them to pay you compensation.
                        </p>
                        <h5>Protecting yourself online</h5>
                        <p>There are things you can do to reduce the likelihood of you falling victim to cyber crime, such as making sure you have up-to-date anti-virus software on your computer and strong passwords.

                        </p>
                    </div>
                    <div class="col-md-12 well admin-content" id="Domestic_abuse">
                        <h3 class=" col-md-9 list-group-item list-group-item-secondary">Domestic abuse</h3>
                        <br>
                        <h4>What is domestic abuse?</h4><p>
                            The UK government’s definition of domestic violence is ‘any incident or pattern of incidents of controlling, coercive, threatening behaviour, violence or abuse between those aged 16 or over who are, or have been, intimate partners or family members regardless of gender or sexuality. The abuse can encompass, but is not limited to psychological, physical, sexual, financial, emotional.’
                        </p><h5>
                            Domestic abuse can take different forms, including:
                        </h5><ul>
                            <li>physical abuse</li>
                            <li>sexual abuse</li>
                            <li>financial abuse</li>
                            <li>coercive control / emotional abuse</li>
                            <li>digital / online abuse</li>
                            <li>honour-based violence</li>
                            <li>forced marriage</li>
                            <li>female genital mutilation (FGM).</li>
                        </ul>
                        <h4>Types of domestic abuse</h4>
                        <h5>Physical abuse</h5>
                        <p>Physical abuse (violence) can include pushing, hitting, punching, kicking, choking and using weapons.</p>
                        <h5>Verbal abuse</h5>
                        <p>Verbal abuse is the use of harsh or insulting language directed at a person. You might be called names or constantly put down by your partner.</p>
                        <h5>Emotional abuse</h5>
                        <p>Emotional abuse or coercive control is the act of repeatedly making someone feel bad, intimidated or scared. This can include threatening or controlling behaviour (such as controlling or withholding finances), blackmailing, constantly criticising or checking up on someone, or playing mind games.</p>
                        <h5>Mental abuse</h5>
                        <p>Psychological or mental abuse is when someone is subjected or exposed to a situation that can result in psychological trauma, including anxiety, depression or post-traumatic stress disorder.</p>
                        <h5>Sexual abuse</h5>
                        <p>Sexual abuse is when you’re forced or pressured to have sex without your consent (rape), unwanted sexual activity, touching, groping or being made to watch pornography.</p>
                        <h4>Signs of domestic abuse</h4>
                        <p>Most people will experience some difficulties in their relationships, but to know whether a relationship is abusive you should look at how the behaviour of your partner or family member makes you feel. If you feel intimidated, controlled or unable to speak out, that’s abuse.</p>
                        <p>Here are some signs you might be in an abusive relationship — you can read more in our guide to recognising the signs of domestic abuse.</p>
                        <ul>
                            <li>Your partner criticises you and makes you doubt yourself. You might start believing that you’re unattractive, or lucky to have a partner at all.</li>
                            <li>You feel anxious and stressed in your partner’s presence. You worry about how your partner might react and this makes you change your behaviour (like staying in more) to avoid arguments with them.</li>
                            <li>You feel intimidated and scared of your partner when they get angry — their behaviour might be unpredictable or aggressive.</li>
                            <li>You’re made to feel guilty and not given the freedom to do things you want to do. Your partner might control you by telling you who you can and can’t see, or emotionally blackmail you.</li>
                        </ul>
                        <h4>Indicators of domestic violence in children</h4>
                        <p>Living in an abusive home or with parents who are in an abusive relationship can have a serious impact on a child’s wellbeing.</p>
                        <p>Some of the indicators of children witnessing or experiencing domestic violence can include:</p>
                        <ul>
                            <li>aggressive or angry behaviour</li>
                            <li>becoming withdrawn</li>
                            <li>getting into trouble or difficulty settling at school</li>
                            <li>anxiety, depression or eating disorders</li>
                            <li>taking drugs or excessively drinking alcohol</li>
                            <li>problems sleeping, including nightmares or wetting the bed.</li>
                        </ul>
                        <p></p>


                    </div>
                    <div class="col-md-12 well admin-content" id="Fraud">
                        <h3 class=" col-md-9 list-group-item list-group-item-secondary">Fraud</h3>
                        <br>
                        <p>Fraud is when someone tricks or deceives you to gain a dishonest advantage – usually money, goods, services or property. There are many words used to describe fraud, such as scam, con, swindle, extortion, sham, double-cross, hoax, cheat and hoodwink.</p>
                        <h4>Who is susceptible to fraud?</h4>
                        <p>The simple answer is that anyone is susceptible to fraud, and every day criminals invent new ways of taking money from innocent people. These criminals are clever and well organised, and they will try to trick and mislead you. When fraud is committed online, the people responsible may be thousands of miles away, which makes bringing offenders to justice very difficult, and sometimes impossible.</p>

                        <p>Although embarrassment or shame can be common reactions, you have no need to feel this way. Even the most careful people can be caught out, and sometimes fraudsters only need the smallest piece of information, such as your address, email or phone number, to commit a crime. Some people blame themselves after falling victim to fraud, but you're not to blame – only the offender is responsible for this crime taking place.</p>
                        <h4>Types of fraud</h4>
                        <h5> Common scams</h5>
                        <p>Fraudsters often adopt a fake identity to commit crimes. They might:</p>
                        <ul>
                            <li>pretend to work for a well-known company or charity</li>
                            <li>persuade you to buy goods that are not for sale, don’t exist or are worthless</li>
                            <li> provide a service, often of poor quality (such as building work or resurfacing driveways) but charge you many times the price they quoted, often using threats to get payment</li>
                            <li> trick you into giving them money, even large amounts, possibly over a long period of time, with the promise of making you more money – for example, bogus lottery wins or inheritance scams where they might demand money from you in order to receive your fictitious prize or inheritance</li>
                            <li> persuade you to invest your pension in fake pension plans that have little value, are not suited to your long-term needs or are worthless.</li>
                        </ul>
                        <h5>Identify theft</h5>
                            <p>Identity theft is when someone commits fraud by using your personal details to carry out a crime. This can include deceiving others to open bank accounts, or applying for loans or purchasing goods and services using your bank details and money. It can also extend to ‘borrowing’ your identity to hide debts or poor credit ratings and, in extreme cases, creating fake identity documents. This crime can be extremely damaging, as not only do you feel powerless to stop the crimes being committed, you may not even be aware that it’s happening until it is too late.</p>

                            <p>If you think you’ve experienced identity theft you should report it to Action Fraud and contact your bank or building society explaining your concerns. Some banks and insurance companies provide practical advice and support to help you through what can be an unsettling period.</p>
                       </div>
                    <div class="col-md-12 well admin-content" id="Hate_crime">
                        <h3 class=" col-md-9 list-group-item list-group-item-secondary">Hate crime</h3>
                        <br>
                        <p>Hate crime is the term used to describe an incident or crime against someone based on a part of their identity.</p>

                        <p>There are five categories of ‘identity’ when a person is targeted because of a hostility or prejudice towards their:</p>
                        <ul>
                            <li>disability</li>
                            <li>race or ethnicity</li>
                            <li>religion or belief (which includes non-belief)</li>
                            <li>sexual orientation</li>
                            <li> gender identity.</li>
                        </ul>
                        <p>Victim Support also recognises crimes targeted at alternative sub-cultures (such as Goth) as a form of hate crime.
                        </p><p>
                        Hate crime can be any criminal or non-criminal act such as graffiti, vandalism to a property, name calling, assault or online abuse using social media.
                        </p><p>                        Experiencing hate crime can be a particularly frightening experience as you've been targeted because of who you are, or who or what your attacker thinks you are. Unlike non-identity related offences, the attack is very personal and specifically targeted, which means it’s less likely to be a random attack.
                        </p><p>
                        Hate incidents can feel like crimes to people who suffer them and often escalate to crimes or tension in a community. You can report such incidents, but the police can only prosecute when the law is broken. However, the police can work with other organisations to prevent the situation escalating.
                        </p>
                        <h4>The cost of hate crimes</h4>
                        <p>Every year, thousands of people in Britain are affected by hate crime. Nobody should have to live with the fear and anxiety that this crime causes. It can also affect other people in your community, especially if they are seen to be part of the same group in society. As well as the emotional and physical harm, you may suffer serious financial losses.
                        </p><p>                        At its most extreme, you may be made homeless, forced to leave an area or made to feel so unsafe that you choose to move away. Other costs you might have to bear include the cost of repairing damage, dealing with graffiti, replacing possessions and increasing home and personal security.
                        </p><p>                        You may or may not have insurance to cover these – even if you do, there might be costs associated with a no-claims bonus or a policy excess. You may also have to pay for the cost of travelling to medical appointments or court, or simply to protect yourself from further attacks by taking taxis, rather than public transport.
                        </p>
                    </div>
                    <div class="col-md-12 well admin-content" id="Murder_or_manslaughter">
                        <h3 class=" col-md-9 list-group-item list-group-item-secondary">Murder or manslaughter</h3>
                        <br>
                        <p>Bereavement is a painful experience for anyone, but when you lose someone because of the violent actions of another person – through murder or manslaughter – it can be particularly devastating.
                        </p>
                        <h4>Feelings after a murder</h4><p>
                        As well as coping with your loss, the knowledge that it was caused by the conscious actions of another person can be incredibly distressing, and cause you to experience strong, sometimes overpowering feelings
                        </p><p>
                        Every person experiences bereavement differently and your feelings may change from day to day. Over time you may feel a wide range of emotions. Talking about what you’re going through and how you feel can’t change what’s happened, but it can help in other ways.
                        </p><p>
                        While those around you may want to help support you, they may also be struggling to cope at this difficult time. So having someone else to listen and help can be very important.
                        </p>

                    </div>
                    <div class="col-md-12 well admin-content" id="Robbery">
                        <h3 class=" col-md-9 list-group-item list-group-item-secondary">Robbery</h3>
                        <br><p>A robbery is when someone takes something from you with violence or threats – usually (but not always) in the street or another public place. It’s considered to be a relatively common crime, and can sometimes happen in relation to other crimes – for example, gang violence, hate crime or antisocial behaviour. But although it’s quite a common crime, the impact it has on you can still be very damaging.</p>
                        <h4>Coping with the effects of robbery</h4>
                        <p>Even if you’re not physically hurt during a robbery, it can be very distressing to be threatened with violence or if someone uses force to steal from you. So even without injury, it’s still classed as a violent crime.
                        </p>
                        <p>Being confronted by a thief, who might have a weapon, can be a frightening experience for anyone. How you react will depend on lots of different factors – not just the crime, but things about you as a person and how you cope with difficult events in your life. Everyone will respond differently, but however you feel, remember that it’s never your fault – only the offender is to blame and nobody has the right to take or destroy your things.
                        </p>
                        <h4>How you might feel afterwards</h4>
                        <p>Most people experience a normal response of shock and fear after being robbed. You may have no reaction straight afterwards, but later on you might start to feel more distressed by the events. The repercussions of a crime like this can last a long time. You may be afraid of experiencing a robbery again, making you nervous about going out and being in public places.</p>
                    </div>
                    <div class="col-md-12 well admin-content" id="Sexual_harassment">
                        <h3 class=" col-md-9 list-group-item list-group-item-secondary">Sexual harassment</h3>
                        <br>
                        <h4>What is sexual harassment?</h4>
                        <p>Sexual harassment is any kind of unwanted behaviour of a sexual nature that makes you feel humiliated or intimidated, or that creates a hostile environment.
                        </p><p>
                        When someone calls you insulting sexual names, talks about you in a sexual way that makes you feel uncomfortable (like commenting on your body), or spreads sexual rumours about you, that’s sexual harassment. It can happen in person, over the phone, or online.
                        </p>
                        Sexual harassment can make you feel anxious, depressed and lead to other problems, such as difficulties sleeping.</p>
                        <h4>Workplace sexual harassment</h4>
                        <p>
                        Experiencing sexual harassment at work can create a stressful and hostile working environment, particularly if you’re harassed by someone who works closely with you.
                        </p><p>                        If you’re sexually harassed by someone at work, you may feel intimidated or anxious about going to work.
                        </p><p>
                        Sexual harassment is a form of unlawful discrimination under the Equality Act 2010.
                        </p><p>
                        If you experience sexual harassment at work, you can report it to your manager, HR representative or trade union. It’s a good idea to keep a record of any emails you send or receive regarding the harassment as these may help if you make a claim.
                        </p>
                        <h4>Types of sexual harassment</h4>
                        <h5>Verbal harassment</h5>
                        <p>Verbal harassment might include someone making sexually suggestive comments to you, for example remarking on your body or appearance, or name calling.
                        </p>
                        <h5>Sexual jokes</h5>
                        <p>If you’re subjected to sexual jokes that make you feel uncomfortable, offended or intimidated, this counts as sexual harassment.
                        </p>
                        <h5>Sexual advances</h5>
                        <p>
                        Unwanted sexual advances are a form of sexual harassment. This might include ‘leering’ or unwanted and inappropriate sexual propositions, whether in person, over the phone or by email.
                        </p>
                        <h5>LGBT</h5>
                        <p>
                        Anyone can be subjected to unwanted sexual behaviour, whether you’re gay, straight, bi or trans.
                        </p><p>
                        Some people might think that sexual harassment towards someone of the same sex (for example, a woman sexually harassing another woman) might not be taken seriously, but that isn’t the case.
                        </p><p>
                        Sexual harassment isn’t normal and you’re not ‘asking for it’, whatever the circumstances.
                        </p><p>
                        If you contact Victim Support for help, we will believe you and any support you receive will be confidential. This means if you have experienced sexual harassment but don’t want to disclose your sexual orientation, you don’t have to.
                        </p>
                    </div>
                    <div class="col-md-12 well admin-content" id="Stalking_and_harassment">
                        <h3 class=" col-md-9 list-group-item list-group-item-secondary">Stalking and harassment</h3>
                        <br>
                        <p>A lot of people think stalking is something that just happens to celebrities, but the reality is that it can happen to anyone.</p>

                       <p>Stalking can be defined as persistent and unwanted attention that makes you feel pestered and harassed. It includes behaviour that happens two or more times, directed at or towards you by another person, which causes you to feel alarmed or distressed or to fear that violence might be used against you.
                       </p>
                        <p>What makes the problem particularly hard to cope with is that it can go on for a long period of time, making you feel constantly anxious and afraid. Sometimes the problem can build up slowly and it can take a while for you to realise you are caught up in an ongoing campaign of abuse.
                        </p>

                    </div>
                    <div class="col-md-12 well admin-content" id="Terrorism">
                        <h3 class=" col-md-9 list-group-item list-group-item-secondary">Terrorism</h3>
                        <br><p>
                        Terrorist attacks are sudden and unpredictable and generally calculated to create a climate of fear or terror among the public.
                        </p><p>
                        A terror attack can lead to an ongoing feeling of insecurity.
                        </p><p>
                        You might be exposed to repetitive and disturbing media images and accounts of the event. This means there may be ‘hiddenʼ victims — people who have been affected but weren't directly caught up in the attacks.

                        </p>
                        <h4>Impact of terrorism on victims and families</h4><p>
                        The process of coming to terms with serious injuries can be complex and varied, and may involve a range of reactions and emotions.
                        </p><p>
                        Some people can suffer from prolonged, severe, debilitating and overwhelming symptoms, such as depression and an inability to cope with daily life.
                        </p><p>
                        People’s feelings and reactions are not static and can change from day to day.
                        </p><p>
                        If you're seriously injured in a terrorist attack, you might need long-term medical treatment, suffer employment issues and have issues around dependence and independence if you can't initially manage as you did previously.
                        </p><p>
                        People who are bereaved are likely to be affected emotionally, psychologically, practically and financially.
                        </p>

                    </div>
                    <div class="col-md-12 well admin-content" id="Violent_crime">
                        <h3 class=" col-md-9 list-group-item list-group-item-secondary">Violent crime</h3>
                        <br>
                        <p>A violent crime is when someone physically hurts or threatens to hurt someone, and also includes crimes where a weapon is used. The police will record a crime as violent if the offender clearly intended or intends to physically harm you, regardless of whether or not it results in a physical injury.
                        </p><p>
                        Violent crimes can include:</p>
                        <ul>
                            <li>assault</li>
                            <li>gun and knife crime</li>
                            <li>sexual violence (such as rape or sexual assault)</li>
                            <li>alcohol and drug-related violence</li>
                            <li>gang violence</li>
                            <li>domestic violence</li>
                            <li> hate crimes (disability, faith, gender, gender identity, race or sexual orientation)</li>
                            <li>robbery</li>
                            <li> murder or manslaughter</li>
                        </ul>
                        <p>Violent crimes can happen in public spaces such as in the street, clubs and pubs, as well as at home or in the workplace, and often the victim knows the person who attacks them. The important thing to remember is that it’s not your fault – you haven’t done anything wrong, and it’s the person who has been violent that is to blame. No-one has the right to hurt you.</p>
                        <h4>How a violent crime can affect you</h4>
                       <p> It can be extremely frightening to experience a violent crime. As well as possibly being hurt or injured physically, you can be very seriously affected emotionally.
                       </p><p>
                        Many people find it hard to deal with the feeling of being powerless when they are threatened. Other common feelings include:
                        </p>
                        <ul>
                            <li>finding it hard to believe what has happened, and feeling numb</li>
                            <li>feeling deeply upset</li>
                            <li> feeling that your life is completely out of control</li>
                            <li>physical symptoms such as ‘the shakes’, sleeplessness or crying all the time</li>
                            <li>extreme anger towards your attacker</li>
                            <li> self-blame for being in the wrong place at the wrong time.</li>
                            <h4>Violent crime within families</h4>
                            <p>If you’ve been hurt or abused by someone you know or love, the effects may be even greater. As well as the experience itself, you’ve had your trust broken, which can affect your relationships with other people. It can also feel more difficult to speak out against people you know or love. You might feel guilty or ashamed about what has happened, but it’s important to remember that you haven’t done anything wrong, and that we can help.</p>
                            <h4>Weapons</h4><p>
                            Experiencing a crime involving a weapon, such as a gun or knife crime, can be extremely shocking. Whether or not you were actually hurt, the fact that someone has used a weapon to force you to do something can have a strong effect on you both emotionally and physically.
                            </p><p>
                            If you’re being threatened and are at risk of weapons being used against you, it’s really important that you contact the police or a specialist agency who can help you think through emergency safety strategies.
                            </p><p>
                            It is illegal to carry a banned or imitation knife or gun. This still counts as a gun or knife crime, even if the weapon can’t be used.
                            </p>
                        </ul>


                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection



