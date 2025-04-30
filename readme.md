# JoCare WordPress Plugins

## Overview
The JoCare WordPress Plugins, developed by [trusted-kigali-developers](https://kigalidevelopers.com/), are specialized tools designed to enhance the functionality of the JoCare health organization's WordPress platform. These plugins empower website administrators to embed interactive, health-focused tools that support women’s reproductive health, **ensuring inclusivity for people with disabilities through accessible design and adherence to accessibility standards (WCAG guidelines).** The current suite includes the **JoCare Ovulation Calculator** and **JoCare Due Date Calculator**, with innovative plugins like the **JoCare Fertility Tracker** and **JoCare Pregnancy Wellness Dashboard** in active development. Built for seamless integration, accuracy, usability, and **accessibility**, these plugins enrich user engagement and align with JoCare’s mission to advance women’s health education **for everyone**.

## Purpose
The JoCare plugins are core components of the JoCare WordPress ecosystem, tailored to deliver scientifically grounded and **accessible** tools for fertility and pregnancy management. They enable health-focused websites to provide actionable insights, fostering informed decision-making for users **of all abilities**. Lightweight, customizable, optimized for WordPress, and designed with **accessibility** in mind, these plugins ensure reliability and ease of use for both administrators and end users.

## Plugins

### 1. JoCare Ovulation Calculator
**Stable Tag**: 0.4
**Requires**: WordPress 4.7+, PHP 7.0
**License**: GPLv2 or later

The JoCare Ovulation Calculator estimates ovulation likelihood based on the user’s last menstrual period and average cycle length. It uses data from peer-reviewed research (Sarah Johnson et al., 2018) to display percentage-based ovulation probabilities on an interactive calendar. **The interface is designed to be navigable and understandable by individuals with disabilities, adhering to WCAG guidelines for visual and cognitive accessibility.**

**Key Features**:
- **Input**: First day of last period and average cycle length. **Forms are labeled and structured for screen reader compatibility.**
- **Output**: Calendar with ovulation days marked in purple and percentage probabilities. **Visual elements have sufficient color contrast, and information is conveyed through text alternatives where necessary.**
- **Integration**: Shortcode (`[jocare-ovulation-calculator]`) or widget. **Both integration methods maintain accessibility.**
- **Accuracy Note**: Relies on the calendar method; ovulation tests are more precise. **This limitation is clearly communicated.**

**Use Case**: Ideal for fertility blogs, women’s health platforms, or educational sites **seeking to reach a diverse audience**.

### 2. JoCare Due Date Calculator
**Stable Tag**: 1.0.4
**Requires**: WordPress 4.7+, PHP 7.0
**License**: GPLv2 or later

The JoCare Due Date Calculator estimates a baby’s due date using the first day of the last menstrual period and average cycle length to approximate ovulation and conception. **Accessibility has been a key consideration in its development.**

**Key Features**:
- **Input**: Last period start date and cycle length. **Input fields are properly labeled for assistive technologies.**
- **Output**: Estimated due date. **The output is clearly presented and accessible.**
- **Integration**: Shortcode (`[jocare-due-date-calculator]`) or widget. **Both are designed for accessible embedding.**
- **Multilingual**: Supports English, French, and Spanish (since v1.1). **Language selection options are accessible.**
- **Accuracy Note**: Provides estimates; consult healthcare providers for precision. **This disclaimer is clearly visible.**

**Use Case**: Perfect for pregnancy blogs, parenting sites, or health organizations **committed to inclusive information**.

### 3. JoCare Fertility Tracker (In Development)
**Status**: Beta
**Expected Release**: Q3 2025
**Requires**: WordPress 5.0+, PHP 7.2

The JoCare Fertility Tracker will enable users to log and monitor fertility indicators, such as basal body temperature, cervical mucus, and ovulation test results, alongside cycle data. It will generate personalized fertility reports and predictive analytics for optimal conception timing. **Accessibility is a core requirement in the ongoing development process.**

**Planned Features**:
- **Input**: Daily fertility metrics via an interactive form. **The form will be designed with accessibility best practices.**
- **Output**: Visual fertility charts and conception probability forecasts. **Efforts will be made to provide accessible alternatives to visual charts.**
- **Integration**: Shortcode and widget with customizable privacy settings. **Accessibility will be maintained across all integration methods.**
- **Unique Feature**: Machine learning-based predictions using anonymized, aggregated data (GDPR-compliant). **Accessibility considerations will be integrated into data presentation.**

**Use Case**: Designed for women actively planning pregnancy and health platforms offering advanced fertility tools **with a focus on inclusivity**.

### 4. JoCare Pregnancy Wellness Dashboard (In Development)
**Status**: Prototype
**Expected Release**: Q4 2025
**Requires**: WordPress 5.0+, PHP 7.2

The JoCare Pregnancy Wellness Dashboard will provide pregnant users with a comprehensive tool to track pregnancy milestones, nutrition, and wellness goals. It will include reminders for prenatal appointments and curated educational content tailored to each trimester. **Accessibility is a fundamental aspect of the design and development.**

**Planned Features**:
- **Input**: Pregnancy stage, health metrics, and lifestyle preferences. **Input mechanisms will be designed to be accessible to a wide range of users.**
- **Output**: Interactive dashboard with progress trackers and personalized tips. **Accessible presentation of dashboard information is a priority.**
- **Integration**: Embeddable via shortcode or widget; supports multisite WordPress setups. **Accessibility will be ensured in all embedding scenarios.**
- **Unique Feature**: Integration with wearable devices for real-time health data (e.g., heart rate, sleep patterns). **Accessibility of integrated data will be considered.**

**Use Case**: Ideal for maternity blogs, obstetric clinics, or health platforms supporting expectant mothers **with a commitment to accessibility**.

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
   - Access settings under **Tools** for each plugin. **Plugin settings will be designed with accessibility in mind.**
   - Use shortcodes or widgets to embed tools in pages, posts, or sidebars. **Ensure that the surrounding content and layout are also accessible.**

## Technical Details
- **Compatibility**: Tested up to WordPress 5.9.1 (Ovulation), 6.0 (Due Date); upcoming plugins will support 5.0+. **Ongoing testing includes accessibility checks.**
- **Dependencies**: PHP 7.0+ (7.2+ for upcoming plugins).
- **Customization**: Admins can adjust display options; Due Date Calculator supports language selection. **Customization options will be designed to not negatively impact accessibility.**
- **Performance**: Optimized for minimal resource usage. **Performance considerations include maintaining accessibility for users with slower connections or assistive technologies.**
- **Scientific Basis**: Ovulation Calculator leverages peer-reviewed data; Due Date Calculator uses obstetric standards; upcoming plugins will incorporate advanced analytics. **The presentation of information related to the scientific basis will be made accessible.**

## Why JoCare Plugins?
These plugins are purpose-built for the JoCare WordPress platform, aligning with JoCare’s mission to empower women’s health **in an accessible manner**:
- **Native Integration**: Seamless and **accessible** compatibility with WordPress for effortless setup.
- **User-Centric Design**: Intuitive interfaces with clear, actionable, and **accessible** outputs.
- **Innovative Roadmap**: Upcoming plugins introduce cutting-edge features like predictive analytics and wearable integration, **with accessibility as a key development principle**.
- **Reliability**: Grounded in scientific methods, with clear guidance on limitations, **presented in an accessible format**.
- **Community Impact**: Supports JoCare’s goal of accessible, education-driven health tools **for all members of the community**.

## Credits
Developed by [trusted-kigali-developers](https://kigalidevelopers.com/) for [JoCare](https://www.jocare.rw/), a leader in women’s reproductive health **and a champion for inclusivity**.

## License
All plugins are licensed under [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html), ensuring open-source flexibility and the ability for **accessibility modifications and improvements by the community**.

## Future Development
The JoCare team is committed to:
- Releasing the Fertility Tracker and Pregnancy Wellness Dashboard in 2025, **with a strong emphasis on accessibility**.
- Expanding platform compatibility beyond WordPress.
- Enhancing AI-driven features for personalized health insights, **ensuring these insights are presented accessibly**.
- Integrating with global health initiatives to broaden impact **while maintaining a commitment to inclusivity**.
