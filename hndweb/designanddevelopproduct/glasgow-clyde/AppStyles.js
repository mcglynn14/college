import { StyleSheet } from 'react-native';

export default StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#f0f0f7',
  },
  header: {
    fontWeight: 'bold',
    fontSize: 24,
    textAlign: 'center',
    color: '#2c3e50',
    marginTop: 40,
    marginBottom: 30,
    paddingHorizontal: 20,
  },
  yearRow: {
    backgroundColor: '#3498db',
    paddingVertical: 15,
    paddingHorizontal: 10,
    marginVertical: 5,
    marginHorizontal: 15,
    borderRadius: 10,
    shadowColor: '#2c3e50',
    shadowOffset: { width: 0, height: 2 },
    shadowOpacity: 0.2,
    shadowRadius: 3,
    elevation: 3,
  },
  yearText: {
    color: 'white',
    fontWeight: 'bold',
    fontSize: 18,
    textAlign: 'center',
  },
  moduleContainer: {
    backgroundColor: '#ecffff',
    padding: 15,
    marginHorizontal: 20,
    borderRadius: 10,
    shadowColor: '#7f8c8d',
    shadowOffset: { width: 0, height: 2 },
    shadowOpacity: 0.2,
    shadowRadius: 3,
    elevation: 3,
    marginBottom: 10,
  },
  moduleText: {
    color: '#34495e',
    fontSize: 16,
    marginBottom: 8,
    lineHeight: 24,
    paddingLeft: 10, // Added padding to accommodate bullet points
  },
  text: {
    fontSize: 16, // Adjust the font size as needed
    textAlign: 'center', // Ensures the text itself is centered if it spans multiple lines
    position: 'absolute',
    bottom: 20,
    left: 0,
    right: 0,
    paddingBottom: 20,
  },
});
