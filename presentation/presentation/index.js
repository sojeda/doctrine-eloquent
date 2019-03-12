// https://adrianalonso.es/libros-de-desarrollo/libros-de-desarrollo-1-clean-code-de-robert-c-martin/
// Import React
import React from "react";

// Import Spectacle Core tags
import {
  BlockQuote,
  Cite,
  Deck,
  Heading,
  ListItem,
  List,
  Quote,
  Slide,
  Text, Layout, Fill, Image
} from "spectacle";

// Import theme
import createTheme from "spectacle/lib/themes/default";

// Require CSS
require("normalize.css");

const theme = createTheme({
  primary: "white",
  secondary: "#1F2022",
  tertiary: "#03A9FC",
  quaternary: "#CECECE"
}, {
  primary: "Montserrat",
  secondary: "Helvetica"
});

export default class Presentation extends React.Component {
  render() {
    return (
      <Deck transition={["zoom", "slide"]} transitionDuration={500} theme={theme}>
        <Slide transition={["zoom"]} bgColor="primary">
          <Image src="assets/front.png">Laravel</Image>
          <Heading size={1} fit caps lineHeight={1} textColor="secondary">
            <p>Extendiendo Laravel:</p>
            Cómo usar con Doctrine ORM
          </Heading>
          <Text margin="10px 0 0" textColor="tertiary" size={1} fit bold>
            PHP BAIRES
          </Text>
        </Slide>
        <Slide transition={["fade"]} bgColor="tertiary">
          <Heading size={6} textColor="primary" caps>Presentación</Heading>
          <Heading size={3} textColor="secondary">@soj3da</Heading>
          <Layout>
            <Fill />
            <Fill>
              <List>
                <ListItem>Administrador de <strong>Laraveles.com</strong></ListItem>
                <ListItem>Docente en Digital House</ListItem>
                <ListItem>Programador en Digbang</ListItem>
                <ListItem>Consultor Free Lance</ListItem>
              </List>
            </Fill>
          </Layout>
        </Slide>
        <Slide transition={["fade"]} bgColor="primary" textColor="tertiary">
          <Heading size={6} textColor="secondary" caps>¿Que veremos?</Heading>
          <List>
            <ListItem>Crear una Aplicacion en Laravel</ListItem>
            <ListItem>Eloquent y Doctrine</ListItem>
            <ListItem>Como configurar Doctrine ORM en nuestro Proyecto</ListItem>
            <ListItem>Consulta y Persistencia de Datos</ListItem>
          </List>
        </Slide>
        <Slide transition={["fade"]} bgColor="secondary" textColor="primary">
          <BlockQuote>
            <Quote>It’s OK to figure out murder mysteries, but you shouldn’t need to figure out code. You should be able to read it.</Quote>
            <Cite>Steve McConnell</Cite>
          </BlockQuote>
        </Slide>
      </Deck>
    );
  }
}
