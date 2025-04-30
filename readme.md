# JoCare WordPress Plugins

## Overview
The JoCare WordPress Plugins, developed by [trusted-kigali-developers](https://kigalidevelopers.com/), are specialized tools designed to enhance the functionality of the JoCare health organization's WordPress platform. These plugins empower website administrators to embed interactive, health-focused tools that support women’s reproductive health, **ensuring inclusivity for people with disabilities through accessible design, adherence to accessibility standards (WCAG guidelines), and the provision of sign language interpretation via YouTube links alongside descriptive text for key information.** The current suite includes the **JoCare Ovulation Calculator** and **JoCare Due Date Calculator**, with innovative plugins like the **JoCare Fertility Tracker** and **JoCare Pregnancy Wellness Dashboard** in active development. Built for seamless integration, accuracy, usability, and **accessibility**, these plugins enrich user engagement and align with JoCare’s mission to advance women’s health education **for everyone**.

## Purpose
The JoCare plugins are core components of the JoCare WordPress ecosystem, tailored to deliver scientifically grounded and **accessible** tools for fertility and pregnancy management. They enable health-focused websites to provide actionable insights, fostering informed decision-making for users **of all abilities**, **with a commitment to making information understandable through visual aids like sign language videos and comprehensive text descriptions.** Future iterations of even the existing plugins may explore how **AI** could further personalize the user experience or provide more nuanced insights. Lightweight, customizable, optimized for WordPress, and designed with **accessibility** in mind, these plugins ensure reliability and ease of use for both administrators and end users.

## Plugins

### 1. JoCare Ovulation Calculator
**Stable Tag**: 0.4
**Requires**: WordPress 4.7+, PHP 7.0
**License**: GPLv2 or later

The JoCare Ovulation Calculator estimates ovulation likelihood based on the user’s last menstrual period and average cycle length. It uses data from peer-reviewed research (Sarah Johnson et al., 2018) to display percentage-based ovulation probabilities on an interactive calendar. **The interface is designed to be navigable and understandable by individuals with disabilities, adhering to WCAG guidelines for visual and cognitive accessibility. Key instructions and explanations are accompanied by links to YouTube videos featuring sign language interpretation and detailed text descriptions.**

**Key Features**:
- **Input**: First day of last period and average cycle length. **Forms are labeled and structured for screen reader compatibility. Where applicable, links to sign language explanations and text descriptions are provided.**
- **Output**: Calendar with ovulation days marked in purple and percentage probabilities. **Visual elements have sufficient color contrast, and information is conveyed through text alternatives where necessary, alongside sign language video links and descriptive text.**
- **Integration**: Shortcode (`[jocare-ovulation-calculator]`) or widget. **Both integration methods maintain accessibility, including provisions for sign language and text descriptions.**
- **Accuracy Note**: Relies on the calendar method; ovulation tests are more precise. **This limitation is clearly communicated with supporting sign language and text.**

**Use Case**: Ideal for fertility blogs, women’s health platforms, or educational sites **seeking to reach a diverse audience, including those who use sign language or require detailed text explanations.**

### 2. JoCare Due Date Calculator
**Stable Tag**: 1.0.4
**Requires**: WordPress 4.7+, PHP 7.0
**License**: GPLv2 or later

The JoCare Due Date Calculator estimates a baby’s due date using the first day of the last menstrual period and average cycle length to approximate ovulation and conception. **Accessibility has been a key consideration in its development, with important information supported by sign language videos via YouTube links and comprehensive text descriptions.**

**Key Features**:
- **Input**: Last period start date and cycle length. **Input fields are properly labeled for assistive technologies, with links to sign language explanations and text descriptions provided.**
- **Output**: Estimated due date. **The output is clearly presented and accessible, accompanied by sign language video links and descriptive text.**
- **Integration**: Shortcode (`[jocare-due-date-calculator]`) or widget. **Both are designed for accessible embedding, ensuring sign language and text support are maintained.**
- **Multilingual**: Supports English, French, and Spanish (since v1.1). **Language selection options are accessible, and key information within each language is supported by sign language and text.**
- **Accuracy Note**: Provides estimates; consult healthcare providers for precision. **This disclaimer is clearly visible and supported by sign language and text.**

**Use Case**: Perfect for pregnancy blogs, parenting sites, or health organizations **committed to inclusive information that is accessible through multiple formats, including sign language and detailed text.**

### 3. JoCare Fertility Tracker (In Development)
**Status**: Beta
**Expected Release**: Q3 2025
**Requires**: WordPress 5.0+, PHP 7.2

The JoCare Fertility Tracker will enable users to log and monitor fertility indicators, such as basal body temperature, cervical mucus, and ovulation test results, alongside cycle data. It will generate personalized fertility reports and predictive analytics for optimal conception timing. **Accessibility is a core requirement in the ongoing development process, with plans to incorporate sign language explanations and detailed text descriptions for key features and instructions.**

**Planned Features**:
- **Input**: Daily fertility metrics via an interactive form. **The form will be designed with accessibility best practices, including provisions for sign language support and text alternatives.**
- **Output**: Visual fertility charts and conception probability forecasts. **Efforts will be made to provide accessible alternatives to visual charts, alongside sign language explanations and text summaries of the data.**
- **Integration**: Shortcode and widget with customizable privacy settings. **Accessibility will be maintained across all integration methods, including support for sign language and text.**
- **Unique Feature**: **Leveraging AI,** this tracker will offer enhanced predictive analytics based on anonymized, aggregated data (GDPR-compliant), providing users with more accurate insights into their fertility patterns. **Explanations of AI-driven insights will be provided through accessible formats, including sign language videos and detailed text.**

**Use Case**: Designed for women actively planning pregnancy and health platforms offering advanced fertility tools **with a focus on inclusivity and data-driven insights powered by AI, ensuring information is accessible through sign language and text.**

### 4. JoCare Pregnancy Wellness Dashboard (In Development)
**Status**: Prototype
**Expected Release**: Q4 2025
**Requires**: WordPress 5.0+, PHP 7.2

The JoCare Pregnancy Wellness Dashboard will provide pregnant users with a comprehensive tool to track pregnancy milestones, nutrition, and wellness goals. It will include reminders for prenatal appointments and curated educational content tailored to each trimester. **Accessibility is a fundamental aspect of the design and development, with the intention to include sign language interpretation via YouTube links and comprehensive text descriptions for important information and guidance.**

**Planned Features**:
- **Input**: Pregnancy stage, health metrics, and lifestyle preferences. **Input mechanisms will be designed to be accessible to a wide range of users, with supporting sign language and text explanations.**
- **Output**: Interactive dashboard with progress trackers and personalized tips. **Accessible presentation of dashboard information is a priority, with key information accompanied by sign language videos and text descriptions.**
- **Integration**: Embeddable via shortcode or widget; supports multisite WordPress setups. **Accessibility will be ensured in all embedding scenarios, including support for sign language and text.**
- **Unique Feature**: **AI algorithms will personalize the wellness tips and educational content** based on the user's pregnancy stage and tracked data, potentially integrating with wearable devices for real-time health data (e.g., heart rate, sleep patterns), ensuring accessibility of this integrated information through sign language and text alternatives.

**Use Case**: Ideal for maternity blogs, obstetric clinics, or health platforms supporting expectant mothers **with a commitment to accessibility and AI-driven personalized support, making information understandable through sign language and detailed text.**

## Installation
All JoCare plugins are designed for easy and **accessible** integration into the JoCare WordPress platform:
1. **From WordPress Admin**:
   - Go to **Plugins > Add New**. **The WordPress admin interface is generally accessible.**
   - Search for the desired JoCare plugin.
   - Install and activate. **Standard WordPress installation processes are accessible.**
2. **Manual Installation**:
   - Upload the plugin folder to `/wp-content/plugins/`. **This method requires file system access.**
   - Activate via the **Plugins** menu. **The WordPress admin interface is generally accessible.**
3. **Configuration**:
   - Access settings under **Tools** for each plugin. **Plugin settings will be designed with accessibility in mind, including clear instructions with potential sign language and text support.**
   - Use shortcodes or widgets to embed tools in pages, posts, or sidebars. **Ensure that the surrounding content and layout are also accessible and that embedded elements retain sign language and text support.**

## Technical Details
- **Compatibility**: Tested up to WordPress 5.9.1 (Ovulation), 6.0 (Due Date); upcoming plugins will support 5.0+. **Ongoing testing includes accessibility checks, including the usability of sign language and text descriptions.**
- **Dependencies**: PHP 7.0+ (7.2+ for upcoming plugins).
- **Customization**: Admins can adjust display options; Due Date Calculator supports language selection. **Customization options will be designed to not negatively impact accessibility or the availability of sign language and text support.**
- **Performance**: Optimized for minimal resource usage. **Performance considerations include ensuring smooth loading of embedded sign language videos and text content for all users.**
- **Scientific Basis**: Ovulation Calculator leverages peer-reviewed data; Due Date Calculator uses obstetric standards; upcoming plugins will **utilize AI ethically and responsibly, complementing the scientific basis with data-driven insights, ensuring explanations are accessible through sign language and text.**

## Why JoCare Plugins?
These plugins are purpose-built for the JoCare WordPress platform, aligning with JoCare’s mission to empower women’s health **in an accessible manner through user-centric design, innovative technology, and a commitment to providing information through multiple accessible formats, including sign language videos and detailed text descriptions**:
- **Native Integration**: Seamless and **accessible** compatibility with WordPress for effortless setup.
- **User-Centric Design**: Intuitive interfaces with clear, actionable, and **accessible** outputs, **with key information supported by sign language and text.**
- **Innovative Roadmap**: Upcoming plugins introduce cutting-edge features like predictive analytics and wearable integration, **with accessibility as a key development principle and AI driving advanced functionalities, ensuring explanations are available in sign language and text.**
- **Reliability**: Grounded in scientific methods, with clear guidance on limitations, **presented in an accessible format, with AI potentially contributing to more nuanced analysis, explained through sign language and text.**
- **Community Impact**: Supports JoCare’s goal of accessible, education-driven health tools **for all members of the community, potentially using AI to tailor information to diverse needs, with a consistent focus on providing sign language and text support.**

## Credits
Developed by [trusted-kigali-developers](https://kigalidevelopers.com/) for [JoCare](https://www.jocare.rw/), a leader in women’s reproductive health **and a champion for inclusivity and technological advancement, recognizing the importance of accessible communication through sign language and detailed text.**

## License
All plugins are licensed under [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html), ensuring open-source flexibility and the ability for **accessibility modifications, AI-driven enhancements, and the integration of community-contributed sign language interpretations and text descriptions.**

## Future Development
The JoCare team is committed to:
- Releasing the Fertility Tracker and Pregnancy Wellness Dashboard in 2025, **with a strong emphasis on accessibility, including comprehensive sign language support and text descriptions for all key features, and leveraging AI for enhanced features like personalized predictions and content delivery.**
- Expanding platform compatibility beyond WordPress.
- **Further enhancing AI-driven features for personalized health insights, ensuring these insights are presented accessibly to all users through text, sign language videos, and other appropriate formats, and exploring ethical AI applications in women's health.**
- Integrating with global health initiatives to broaden impact **while maintaining a commitment to inclusivity, providing information in accessible formats like sign language and text, and exploring AI's potential in these collaborations for wider reach and tailored support.**
