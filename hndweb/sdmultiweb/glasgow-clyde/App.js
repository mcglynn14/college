import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet,  Button, Alert } from 'react-native';
import styles from './AppStyles'; // Importing styles

const App = () => {
  const [selectedYear, setSelectedYear] = useState(null);

  const years = {
    'Year 1 (L7)': ['\u2022 Introduction to Web Development', 
                    '\u2022 Computing Systems', 
                    '\u2022 Professional Development in Computing', 
                    '\u2022 Introduction to Programming', 
                    '\u2022 Mathematics for Computing', 
                    '\u2022 CCNA1: Introduction to Networks'],
    'Year 2 (L8)': ['\u2022 Object Oriented Analysis', 
                    '\u2022 Operating Systems', 
                    '\u2022 Database Development', 
                    '\u2022 Structures & Algorithms', 
                    '\u2022 Programming for Mobile Devices'],
    'Year 3 (L9)': ['\u2022 Creative Technologies Professionalism', 
                    '\u2022 Web Site Development', 
                    '\u2022 Research Methods in Computing', 
                    '\u2022Internet Scripting', 
                    '\u2022 Web Server Technology'],
    'Year 4 (L10)': ['\u2022 Computing Honours Project', 
                     '\u2022 Internet Technologies', 
                     '\u2022 Server-Side Systems', 
                     '\u2022 Dynamic Web Technologies']
  };

  const toggleYear = (year) => {
    setSelectedYear(selectedYear === year ? null : year);
  };

  return (
    <View style={styles.container}>
      <Text style={styles.header}>Welcome Glasgow Clyde Students</Text>
      {Object.keys(years).map(year => (
        <View key={year}>
          <TouchableOpacity style={styles.yearRow} onPress={() => toggleYear(year)}>
            <Text style={styles.yearText}>{year}</Text>
          </TouchableOpacity>
          {selectedYear === year && (
            <View style={styles.moduleContainer}>
              {years[year].map(module => (
                <Text key={module} style={styles.moduleText}>{module}</Text>
              ))}
            </View>
          )}
        </View>
      ))}

        <Button
          title="Click me"
            onPress={() => Alert.alert('Enrolement Success!', 'Lets start coding Web and mobile applications')}
        />
      
    </View>
  );
};

export default App;
